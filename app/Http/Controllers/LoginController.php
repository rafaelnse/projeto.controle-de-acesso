<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use App\Models\Visitante;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function auth(Request $request) {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'O campo E-mail é obrigatório!',
            'email.email' => 'O e-mail não é válido',
            'password.required' => 'O campo Senha é obrigatório!',
            'password.password' => 'Senha inválida',
        ]

    );


    if(Auth::attempt($credenciais)) {
        $request->session()->regenerate();
        return redirect()->intended(route('site.index'));
    } else {
        return redirect()->back()->with('erro', 'Email ou senha inválida.');
    }

    }

     public function index()
    {



    }

    public function login()
    {

        return view('login.form');

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('login.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect (route('admin.inicio'));
    }

    /**
     * Display the specified resource.
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(login $login)
    {
        //
    }
}
