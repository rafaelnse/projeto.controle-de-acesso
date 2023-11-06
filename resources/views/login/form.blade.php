@extends('site/layout')
@section('title', 'Login')
@section('conteudo')

<br>
@if ($mensagem = Session::get('erro'))
<div class="alert alert-danger col-md-3 mx-auto mb-3" role="alert">
{{ $mensagem }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger col-md-3 mx-auto mb-3" role="alert">
@foreach($errors->all() as $error)
        {{ $error }} <br>
        @endforeach
</div>

@endif

<br><br><br>
<div class="col-md-4 mx-auto mb-3 shadow-lg rounded-4 border border-secondary bg-secondary-subtle text-emphasis-secondary">
    <span class="d-block p-5 ">


    <h1>Login</h1>
    <br>
    <form action="{{ route('login.auth')}}" method="POST">
        @csrf

        <label for="email" class="form-label">E-mail:</label>
        <input type="email" name="email" class="form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
        <label for="password" class="form-label">Senha:</label>
        <input type="password" name="password" class="form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">

        <div class="form-check">
            <input type="checkbox" name="remember" class="form-check-input border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)"> Lembrar-me
        </div>

        <button type="submit" class="btn btn-success border-secondary"> Entrar </button>
        <a href="{{route('login.create')}}" type="button" class="btn btn-primary"> Registrar </a>

    </form>
    </span>
</div>
@endsection
