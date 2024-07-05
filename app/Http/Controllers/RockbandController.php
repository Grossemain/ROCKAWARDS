<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rockband;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RockbandController extends Controller
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
        $rockbands = Rockband::with('awards')->get();
        return view('rockbands.index', compact('rockbands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rockbands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_rockband' => 'required',
        ]);

        $rockband = Rockband::create([
            'name_rockband' => $request->name_rockband,
            'user_id' => Auth::user()->id,
        ]);

        // DB::table('user')->insert([
        //     'id' => Auth::user()->id,
        // ]);

        return redirect()->route('rockbands.index')->with('success', 'Groupe de rock créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rockband = Rockband::findOrFail($id);
        return view('rockbands.show', compact('rockband'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rockband = Rockband::findOrFail($id);
        return view('rockbands.edit', compact('rockband'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_rockband' => 'required',
        ]);

        $rockband = Rockband::findOrFail($id);
        $rockband->update($request->all());

        return redirect()->route('rockbands.index')->with('success', 'Groupe mis a jour avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rockband = Rockband::findOrFail($id);
        $rockband->delete();

        return redirect()->route('rockbands.index')->with('success', 'Groupe supprimé avec succes');
    }
}
