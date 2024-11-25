<?php

namespace App\Http\Controllers;

use App\Models\Annuaire;
use App\Models\TypeDocument;
use App\Models\User;
use App\Models\Webinaire;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // traitement de connexion des membres
    public function authLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        
    }

    // dashboard
    public function dashboard()
    {
        $nbAnnuaire = Annuaire::all()->count();
        $nbMembre = User::where('role_id', 1)->get()->count();
        $nbConseil = User::where('role_id', 2)->get()->count();
        $nbDocument = TypeDocument::all()->count();
        $nbWebinaire = Webinaire::all()->count();

        return view('dashboard', compact('nbAnnuaire', 'nbMembre', 'nbConseil', 'nbDocument', 'nbWebinaire'));
    }

    // profile
    public function profile()
    {
        return view('profile');
    }

    // modifier le profile
    public function handle_profile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->save();

        return redirect()->route('profile')->with('status', 'Vos informations ont bien été modifiées.');
    }

    // déconnexion
    public function logout(Request $request): RedirectResponse
    {
        $role_id = Auth::user()->role_id;

        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

        if($role_id == 1){
            return redirect()->route('login');
        }
        return redirect()->route('login.conseil');
    }

}
