<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeDocumentRequest;
use App\Models\Parametre;
use App\Models\Tampon;
use App\Models\TypeDocument;
use Illuminate\Http\Request;

class TypeDocumentController extends Controller
{
    /**
     * Afficher tous les documents
    */
    public function index()
    {
        $typedocuments = TypeDocument::all();

        return view('typedocument.index', compact('typedocuments'));
    }

    /**
     * Formulaire pour charger un document
     */
    public function create()
    {
        return view('typedocument.create');
    }

    /**
     * Traitement en Post pour ajouter un document
     */
    public function store(TypeDocumentRequest $request)
    {
        $request->validated();
        
        if ($request->hasFile('fichier_scanner')) {
            // Obtenir le contenu du fichier PDF
            $contenu = file_get_contents($request->file('fichier_scanner')->path());
            $base64Data = base64_encode($contenu); // Conversion du fichier
            $nomFichier = Parametre::genererNomDuFichier($request->nom_fichier);//1

            // Générer l'empreinte numérique avec la fonction MD5
            $empreinte = Parametre::genererEmpreinte($contenu);//2

            // Récupérer une empreinte existante
            $existe = Parametre::verifierSiEmpreinteExiste($empreinte);//3
            if ($existe === false) {
                // L'empreinte du fichier n'existe pas dans la base de données
                $typeDocument = new TypeDocument();
                $typeDocument->nom_fichier = strtolower($nomFichier);
                $typeDocument->fichier_scanner = $base64Data; // Sauvegarde du fichier converti ici
                $typeDocument->empreinte_fichier = $empreinte;
                $typeDocument->save();
                //Enregistrer les empreinte de fichier
                Parametre::sauvegarderTampon($empreinte);//4
                // Après avoir enregistré, faire la redirection
                return redirect()->route('document.index')->with('status', 'Le document a bien été enregistré.');
            } 
            return redirect()->back()->with('warning', 'Le document existe déjà dans la base de données.');
        } else {
            return redirect()->back()->withInput()->withErrors(['fichier_scanner' => 'Veuillez sélectionner un fichier.']);
        }
    }

    /**
     * Afficher le document
     */
    public function show($id)
    {
        $document = TypeDocument::find($id);

        if ($document) {
            return view('typedocument.show', compact('document', 'id'));
        } else {
            return redirect()->route('document.index')->withErrors(['documentId' => 'Document non trouvé.']);
        }
    }

    /**
     * Supprimer le document
     */
    public function delete($id)
    {
        $typeDocument = TypeDocument::find($id);

        // Récupérer une empreinte existante
        $tampon = Tampon::where('empreinte_fichier', $typeDocument->empreinte_fichier)->first();
        if($tampon){
            $tampon->delete();
        }

        if (!$typeDocument) {
            return redirect()->route('document.index')->with('error', 'Document non trouvé.');
        }

        $typeDocument->delete();

        // Après avoir supprimé, faire la redirection avec un message de succès
        return redirect()->route('document.index')->with('status', 'Le document a bien été supprimé.');
    }

}
