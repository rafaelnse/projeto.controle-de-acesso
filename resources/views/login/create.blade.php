@extends('site/layout')
@section('title', 'Registro de admin')
@section('conteudo')


@if ($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }} <br>
    @endforeach

@endif

<br>
<div class="col-md-4 mx-auto mb-2 shadow-lg rounded-4 border border-secondary bg-secondary-subtle text-emphasis-secondary">
    <span class="d-block p-5 ">
        <h1>Registro de administrador</h1>

        <form action="{{ route('users.store')}}" method="POST">
        @csrf

        <label for="nome" class="form-label">Nome: </label>
        <input type="text" name="nome" class="form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
        <label for="sobrenome" class="form-label">Sobrenome: </label>
        <input type="text" name="sobrenome" class="form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
        <label for="email" class="form-label">Email: </label>
        <input type="email" name="email" class="form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
        <label for="senha" class="form-label">Senha: </label>
        <input type="password" name="password" class="form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)"> <br>

        <button type="submit" class="btn btn-success"> Cadastrar </button>
        <a href="{{ route('login.form') }}" class="btn btn-secondary">Cancelar</a>

</form>

    </span>
</div>


@endsection
