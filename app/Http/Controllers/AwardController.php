<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = Award::all();
        return view('awards.index', compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('awards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_award' => 'required',
        ]);

        $award = Award::create([
            'name_award' => $request->name_award,
        ]);

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
    public function edit(string $id)
    {
        $award = Award::findOrFail($id);
        return view('awards.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_award' => 'required',
        ]);

        $award = Award::findOrFail($id);
        $award->update($request->all());

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
