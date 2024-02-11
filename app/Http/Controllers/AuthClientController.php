<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthClientController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function apropos()
    {
        return view('a-propos');

    }
    //afficher le formulaire connexion
    public function visiteurConnexion()
    {
        return view('visiteurConnexion');
    }
    //traitement de formulaire de connexion
    public function visiteurConnexion_post(Request $request)
    {
    //    $auth = $request->validate([
    //     'email'=>'required',
    //     'password'=>'required',
    //    ]);
    //    if(Client::attempt($auth)){
    //         $request->session()->regenerate();

    //         return redirect()->intended('dashboard');
    //    }else{
    //     return redirect()->route('visiteurConnexion');
    //    }
        $credentials = $request->only('email', 'password');

        // Votre logique d'authentification personnalisée avec le modèle Client
        if (Auth::guard('client')->attempt($credentials)) {
            // Authentification réussie
            return redirect()->intended('/home');
        } else {
            // Authentification échouée
            return redirect()->route('visiteurConnexion')->with('error', 'Adresse email ou mot de passe incorrect.');
        }

    }
    //afficher le formulaire d'inscription
    public function visiteurInscription()
    {
        return view('visiteurInscription');
    }
    //traitement du formulaire d'inscription
    public function visiteurInscription_post(Request $request)
    {
       $request->validate([
             'email'=>'required|email|unique:clients',
             'nom'=>'required',
             'prenom'=>'required',
             'password'=>'required',
       ]);
       $user = new Client();
       $user ->email = $request->email;
       $user ->nom = $request->nom;
       $user ->prenom = $request->prenom;
       $user ->password = Hash ::make($request->password) ;
       $user-> save();
       return redirect()->route('visiteurInscription')->with('status','Votre inscription a ete bien prise en compte.');

    }

    public function admin()
    {
        return view('auth/login');
    }
    //fonction pour afficher le dashboard
    public function dashboard(){
       return view('dashboard');
    }
    //fonction de deconnexion
    public function logout(){
        Auth::logout();
        return redirect()->route('visiteurConnexion');
     }
}
