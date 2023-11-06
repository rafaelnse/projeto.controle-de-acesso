@extends('site/layout')
@section('title', 'Editar cadastro de visitante')
@section('conteudo')

<br>
<div class="col-md-6 mx-auto mb-3 shadow-lg rounded-4 border border-secondary bg-secondary-subtle text-emphasis-secondary">
    <span class="d-block p-4 ">
        <h3>Cadastro de {{$visitante->nome}}</h3>

        <form action="{{route('admin.visitante.update', $visitante->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_user" id="id_user" value=" {{ auth()->user()->id }} ">
            @csrf
            @method('PATCH')

            <div class="row g-0 col-auto">

            <label for="imagem" class="col-form-label">Foto</label>
            <input class="form-control border-secondary focus-ring" name="nova_imagem" type="file"  style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">


            <fieldset disabled>
                <label for="documento" class="col-form-label">Documento: </label>
                <input type="int" name="documento" value="{{$visitante->documento}}" class="validate form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
                <label for="expedidor" class="col-form-label">Expedidor: </label>
                <input type="text" name="expedidor" value="{{$visitante->expedidor}}" class="validate form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
            </fieldset>


            <label for="nome" class="col-form-label">Nome completo: </label>
            <input type="text" name="nome" value="{{$visitante->nome}}" class="validate form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">



            <label for="telefone" class="col-form-label">Telefone: </label>
            <input type="int" name="telefone" value="{{$visitante->telefone}}" class="validate form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">

            <label for="endereco" class="col-form-label">Endereço: </label>
            <input type="int" name="endereco" value="{{$visitante->endereco}}" class="validate form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
            <label for="email" class="col-form-label">E-mail: </label>
            <input type="int" name="email" value="{{$visitante->email}}" class="validate form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">


        </div>
        <br>
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a type="button" class="btn btn-danger" href="{{ route('admin.visitantes') }}">Cancelar</a>
        </form>
    </div>

    </span>






@endsection
