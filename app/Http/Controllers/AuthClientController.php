<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthClientController extends Controller
{
    public function showLoginForm()
    {
        return view('authClient.login_client');
    }

    public function login(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (!Auth::guard('client')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        // Rediriger l'utilisateur après la connexion réussie
        return redirect()->intended('/home');
    }

    public function showRegistrationForm()
    {
        return view('authClient.register_client');
    }

    public function register(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:clients', // Vérifier l'unicité dans la table clients
            'password' => 'required|confirmed'
        ])->validate();

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Rediriger l'utilisateur après l'inscription réussie
        return redirect()->route('client.login_client')->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter.');
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();

        $request->session()->invalidate();

        // Rediriger l'utilisateur après la déconnexion
        return redirect()->route('client.login_client');
    }

    // Autres méthodes comme la réinitialisation de mot de passe, la modification de profil, etc., peuvent être ajoutées ici.
}
