<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use App\Models\Acesso;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $busca = request('busca');

        if($busca) {
            $visitantes = Visitante::where([
                ['documento', 'like', '%'.$busca.'%']])->get();


        } else {

        $visitantes = Visitante::paginate(10);


        }
    return view('guests.lista', ['visitantes' => $visitantes, 'busca' => $busca]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guests.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $visitante = $request->all();

        if($request->imagem) {
           $visitante['imagem'] = $request->imagem->store('visitantes');
        }

        //$visitante['slug'] = Str::slug($request->nome);


        $visitante = Visitante::create($visitante);

        return redirect()->route('admin.visitantes')->with('sucesso', 'Visitante cadastrado com sucesso');
    }


    public function detalhes(Visitante $visitante, string $id)
    {

        if (!$visitante = $visitante->where('id', $id)->first()) {
            return back();
        }
        $visitante = Visitante::where('id', $id)->first();

        $acessos = $visitante->acessos;

        //$visita = Visita::paginate(5);

        return view('guests.detalhes', compact('visitante', 'acessos'));
    }


    /**
     * Display the specified resource.
     */

     public function show(Visitante $visitante)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitante $visitante, string $id)
    {
        if (!$visitante = $visitante->where('id', $id)->first()) {
            return back();
        }
        return view('guests.edit', compact('visitante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitante $visitante, string $id)
    {
        if (!$visitante = $visitante->where('id', $id)->first()) {
            return back();
        }


        $visitante->update($request->only([
            'nome',
            'imagem',
            'telefone',
            'endereco',
            'email',
        ]));

        //if ($request->hasFile('nova_imagem')) {
        //    $novaImagem = $request->file('nova_imagem');

        //   $novaImagem->store('visitantes');

        //    $visitante['imagem'] = $novaImagem;
        // }


        return redirect()->route('admin.visitantes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string|int $id)
    {
        if (!$visitante = Visitante::find($id)) {
            return back();
        }

        $visitante->delete();

        return redirect()->route('admin.visitantes');
    }
}
