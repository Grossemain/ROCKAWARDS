<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rockband;
use App\Models\Award;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Gate::denies('access_backoffice')) { // méthode 2 restriction accès : via Gate 
            abort(403, 'Vous n\'êtes pas administrateur : accès refusé');
            // autre syntaxe : if(!Gate::allows('access_backoffice'))
        }

        // je récupère toutes les données nécessaires
        $awards = Award::all();
        $rockbands = Rockband::all();
        $users = User::with('role')->get();

        // je renvoie la vue admin/index.blade.php en y injectant toutes ces données
        return view('dashboard/index', [
            'awards' => $awards,
            'rockbands' => $rockbands,
            'users' => $users
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
