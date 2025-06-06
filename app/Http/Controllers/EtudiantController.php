<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        //$etudiants = Etudiant::orderby('title')->get();


        return view('etudiant.index', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'courriel' => 'required|email|unique:etudiants',
            // 'password' => 'required|min:6|max:20'
        ]);

        $etudiant = new Etudiant();
        $etudiant->fill($request->all());
        // $etudiant->password = Hash::make($request->password);
        $etudiant->save();

        return redirect(route('etudiant.index'))->withSuccess('etudiant created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiant.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        return view('etudiant.edit', ['etudiant' => $etudiant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required|string|max:80',
            'adresse'  => 'required|string|max:180',
            'telephone'  => 'required|string|max:50',
            'courriel'  => 'string|max:80',
            'date_naissance' => 'nullable|date'
        ]);

        $etudiant->update([
            'nom' => $request->nom,
            'adresse'  => $request->adresse,
            'telephone'  => $request->telephone,
            'courriel'  => $request->email,
            'date_naissance'  => $request->date_naissance,       
        ]);

        return redirect()->route('etudiant.show', $etudiant->id)->withSuccess('Etudiant mis à jour!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        $id = $etudiant->id;
        $etudiant->delete();

        return redirect()->route('etudiant.index')->withSuccess('Etudiant number ' . $id . ' deleted!');
    }
}
