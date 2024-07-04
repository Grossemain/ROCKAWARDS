<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;
use App\Models\Rockband;

class AwardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = Award::with('rockbands')->get();

        return view('awards.index', compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rockbands = Rockband::All();
        return view('awards.create', compact('rockbands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_award' => 'required',
        ]);

        $award = Award::create($request->all());

        foreach ($request->request as $key => $value) {
            // si le name de l'input commence par name_rockband (exemple : "name_rockband2")
            if (str_starts_with($key, 'name_rockband')) {
                $award->rockbands()->attach([$value]); // on insère lle rockband correspondant dans rockband_award 
            }
        }

        return redirect()->route('awards.index')->with('success', 'Award créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $award = Award::findOrFail($id);
        return view('awards.show', compact('award'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award $award)
    {
        return view('awards.edit', [
            'awards' => $award,
            'rockbands' => Rockband::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Award $award)
    {
        $request->validate([
            'name_award' => 'required',
        ]);

        // on sauvegarde les modifications issues du formulaire
        $award->update($request->all());

        // on charge les rockbands associés à Award (eager loading)
        $award->load('rockband');

        // on les retire de la table intermédiaire
        foreach ($award->rockbands as $rockband) {
            $award->rockbands()->detach($rockband);
        }
        //  on associe à Award les rockbands cochés dans le formulaire (version foreach)
        foreach (Rockband::all() as $rockband) {

            if (isset($request['rockband' . $rockband->id])) {

                $award->rockbands()->attach($rockband->id);
            }
        }

        return redirect()->route('awards.index')->with('success', 'Award mis a jour avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $award = Award::findOrFail($id);
        $award->delete();

        return redirect()->route('awards.index')->with('success', 'Award supprimé avec succes');
    }
}
