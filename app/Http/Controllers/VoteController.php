<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use App\Models\Rockband;
use App\Models\Award;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $votes = Vote::all();
        return view('votes.index', compact('votes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rockbands = Rockband::All();
        $awards = Award::All();
        return view('votes.create', compact('rockbands', 'awards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vote_award' => 'required',
            'id_rockband' => 'required|exists:rockbands,id',
            'id_award' => 'required|exists:awards,id',

        ]);

        Vote::create([
            'vote_award' => $request->vote_award,
            'id_rockband' => $request->id_rockband,
            'id_award' => $request->id_award,
            'id_user' => Auth::user()->id,
        ]);

        return redirect()->route('votes.index')->with('success', 'A voté !');
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
