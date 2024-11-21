<?php

namespace App\Http\Controllers;

use App\Models\Annuaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnuaireController extends Controller
{
    public function listEntreprise()
    {
        $annuaires = Annuaire::where('status', true)->get();

        return view('pages.list-annuaire', compact('annuaires'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role_id == 2){
            $annuaires = Annuaire::all();
        }else{
            $annuaires = Annuaire::where('user_id', Auth::user()->id)->get();
        }
        
        return view('annuaire.index', compact('annuaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('annuaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_entreprise' => 'required',
        ]);

        if(Auth::user()->role_id == 1){
            $status = false;
        }else{
            $status = true;
        }

        $annuaire = new Annuaire();
        $annuaire->nom_entreprise = $request->nom_entreprise;
        $annuaire->description = $request->description;
        $annuaire->ville = $request->ville;
        $annuaire->pays = $request->pays;
        $annuaire->telephone = $request->telephone;
        $annuaire->logo = $request->logo;
        $annuaire->status = $status;
        $annuaire->user_id = Auth::user()->id;
        $annuaire->save();

        return redirect()->route('annuaire.create')->with('status', 'L\'annuaire a bien été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $annuaire = Annuaire::find($id);

        return view('annuaire.show', compact('annuaire'));
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
    public function update(Request $request)
    {
        $annuaire = Annuaire::find($request->id);
        $annuaire->nom_entreprise = $request->nom_entreprise;
        $annuaire->description = $request->description;
        $annuaire->ville = $request->ville;
        $annuaire->pays = $request->pays;
        $annuaire->telephone = $request->telephone;
        $annuaire->logo = $request->logo;
        $annuaire->update();

        return redirect()->route('annuaire.index')->with('status', 'L\'annuaire a bien été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Approuvé un annuaire
     */
    public function approuve($id)
    {
        $annuaire = Annuaire::find($id);
        $annuaire->status = true;
        $annuaire->save();
        return redirect()->route('annuaire.index');
    }

    /**
     * Désapprouvé un annuaire
     */
    public function deapprouve($id)
    {
        $annuaire = Annuaire::find($id);
        $annuaire->status = false;
        $annuaire->save();
        return redirect()->route('annuaire.index');
    }


}
