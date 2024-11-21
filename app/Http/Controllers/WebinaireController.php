<?php

namespace App\Http\Controllers;

use App\Models\Webinaire;
use Illuminate\Http\Request;

class WebinaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webinaires = Webinaire::all();

        return view('webinaire.index', compact('webinaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('webinaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation' => 'required',
            'tarif' => 'required',
            'date_debut' => 'required|date',
            'heure_debut' => 'required',
            'image_webinaire' => 'required|image|nullable|max:1999',
        ]);

        // Enregistrer la nouvelle image
        if ($request->hasFile('image_webinaire')) {

            $userId = time();
            $image = $request->file('image_webinaire');
            $extension = 'jpg';
            $imageName = $userId . '.' . $extension;
            $path = $image->storeAs('images', $imageName, 'public');

        }

        $webinaire = new Webinaire();
        $webinaire->designation = $request->designation;
        $webinaire->description = $request->description;
        $webinaire->tarif = $request->tarif;
        $webinaire->date_debut = $request->date_debut;
        $webinaire->date_fin = $request->date_fin;
        $webinaire->heure_debut = $request->heure_debut;
        $webinaire->heure_fin = $request->heure_fin;
        $webinaire->image_webinaire = $path;
        $webinaire->url_webinaire = $request->url_webinaire;
        $webinaire->save();

        return redirect()->route('webinaire.create')->with('status', 'Le webinaire a bien été ajouté.');

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
