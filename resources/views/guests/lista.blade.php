@extends('site/layout')
@section('title', 'Historico')
@section('conteudo')

<br>
@if ($mensagem = Session::get('sucesso'))
<div class="alert alert-success col-md-3 mx-auto mb-3 text-center" role="alert">
{{ $mensagem }}
</div>
@endif


<div class="mx-auto p-2" style="width: 200px;">

        <h1>Visitantes</h1>

</div>

<div class="mx-auto grid gap-3" style="width: 200px;">
    <a class="btn btn-primary btn-lg" href="{{route('admin.visitante.form')}}" role="button">Cadastrar visitante</a>
</div>


<div class="p-4 col-md-9 mx-auto mb-3 table-responsive text-center">
<table class="table table-striped table-bordered rouded align-items-center">

    <thead>

        <tr>
        <th scope="colgroup"><i class="bi bi-camera-fill"></i></th>
        <th scope="colgroup">Id</th>
        <th scope="colgroup">Nome</th>
        <th scope="colgroup">Documento</th>
        <th scope="colgroup"></th>
        <th scope="colgroup"></th>


      </tr>
    </thead>


    <tbody>

    @foreach ($visitantes as $visitante)

    <tr>

        <td scope="col"><img src=" {{ url("storage/{$visitante->imagem}")}}" class="rounded-5" width="50px">  </td>
        <td scope="col">{{$visitante->id}} </td>
        <td scope="col"> {{$visitante->nome}} {{--{{$visitante->sobrenome}}--}} </td>
        <td scope="col"> {{$visitante->documento}} </td>
        <td scope="col"> <a class="btn btn-primary" href="{{ route('visitante.detalhes', $visitante->id)}}" role="button"><i class="bi bi-eye" style="font-size: 1rem;"></i> Visualizar</a> </td>
        <td scope="col">
            <a href=" {{ route('admin.acesso.form', $visitante->id)}} "><i class="bi bi-plus-circle-fill text-success" style="font-size: 2rem;" ></i></a>

            <a class="" href=" {{ route('admin.visitante.edit', $visitante->id)}} "><i class="bi bi-pencil-fill text-success-emphasis" style="font-size: 2rem;" ></i></a>


        </td>

    </tr>
    @endforeach

</tbody>
</table>

{{--<div class="row">
    {{ $visitantes->links('vendor.pagination.bootstrap-5') }}
</div>--}}





@endsection
