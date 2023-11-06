<?php

namespace App\Http\Controllers;

use App\Http\Controllers\VisitanteController;
use App\Models\Acesso;
use App\Models\Visitante;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class AcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //return view('site/historico');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Visitante $visitante)
    {
        return view('guests.addacesso', compact('visitante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $acessos = $request->all();

        $acessos = Acesso::create($acessos);



        return redirect()->route('admin.visitantes')->with('sucesso', 'Acesso cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Acesso $acessos)
    {




    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acesso $acesso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Acesso $acesso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acesso $acesso)
    {
        //
    }
}
