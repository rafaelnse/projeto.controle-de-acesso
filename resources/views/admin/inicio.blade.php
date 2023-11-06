@extends('site/layout')
@section('title', 'Inicio')
@section('conteudo')


<br><br><br>
<div class="col-md-6 mx-auto mb-3 shadow-lg rounded-4 border border-secondary bg-secondary-subtle text-emphasis-secondary">
    <span class="d-block p-5 ">


        <form action="{{route('admin.visitantes')}}" method="GET">
            @csrf

            {{--

            --}}

            <div class="input-group mb-3">
                <input type="text" id="busca" name="busca" class="validate form-control border-secondary focus-ring" placeholder="Buscar documento" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
                <button class="btn btn-success border-secondary" type="submit" id="busca"><i class="bi bi-search"></i> Buscar</button>
              </div>

        </form>

    </span>
</div>



@endsection
