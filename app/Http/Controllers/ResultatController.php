<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;
use App\Models\Rockband;
use App\Models\Vote;

class ResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // je récupère toutes les données nécessaires
        $awards = Award::all();
        $rockbands = Rockband::all();
        $votes = Vote::all();
// dd($awards,$rockbands,$votes);
        // je renvoie la vue resultat/index.blade.php en y injectant toutes ces données
        return view('resultat/index', [
            'awards' => $awards,
            'rockbands' => $rockbands,
            'votes' =>$votes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
