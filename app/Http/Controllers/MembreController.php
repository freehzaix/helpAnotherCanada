<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationInscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class MembreController extends Controller
{
    // formulaire de connexion des membres
    public function form_login()
    {
        return view('membre.login');
    }

    // formulaire d'inscription des membres
    public function form_register()
    {
        return view('membre.register');
    }

    // traitement du formulaire d'inscription des membres
    public function handle_register(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
        ]);

        $user = new User();
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 1;
        $user->save();

        Mail::to($request->email)->send(new ConfirmationInscription($request->except('_token')));

        return redirect()->route('login')->with('status', 'Votre inscription a bien été effectué.');
    }

}
