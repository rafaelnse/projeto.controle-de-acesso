@extends('site/layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="position-relative">
<div class="position-absolute top-20 end-0">
    <a href="{{route('admin.visitantes')}}" class="link-secondary"><i class="bi bi-x" style="font-size: 2rem;"></i></a>
    <br><a class="btn btn-primary" href=" {{ route('admin.visitante.edit', $visitante->id)}} "><i class="bi bi-pencil-fill" style="font-size: 1rem;"> Editar</i></a>
    <br>
    <form action="{{ route('admin.visitante.destroy', $visitante->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i>Excluir</button>
    </form>

</div>
</div>

<br>
<div class="d-grid gap-2 col-4 mx-auto">
    <h1>Detalhes do visitante</h1>
</div>
<br>

<div class="col-md-9 mx-auto mb-2">
<div class="row container">

    <div class="col-1 s12 m6">
        <div class="ratio ratio-1x1">
            <div><img src=" {{ url("storage/{$visitante->imagem}")}}" class="rounded" width="200px" ></div>
        </div>
    </div>




    <div class="col-7 mx-auto">
        <ul class="list-group">
            <li class="list-group-item"><h5>{{$visitante->nome}} {{--{{$visitante->sobrenome}}--}}</h5></li>
            <li class="list-group-item"><i class="bi bi-file-earmark-person"></i> Documento: {{$visitante->documento}} || Expedido por: {{$visitante->expedidor}} </li>
            <li class="list-group-item"><i class="bi bi-telephone"></i> Telefone para contato: {{$visitante->telefone}} </li>
            <li class="list-group-item"><i class="bi bi-geo-alt"></i> Endereço: {{$visitante->endereco}} </li>
            <li class="list-group-item"><i class="bi bi-envelope"></i> E-mail: {{$visitante->email}} </li>

            <li class="list-group-item"><i class="bi bi-person-check-fill"></i> Cadastrado por: Id {{$visitante->user->id}} - {{$visitante->user->nome}}</li>
        </ul>

        <br><br>



    </div>

</div>

    </div>

</div>

<div class="col-md-9 mx-auto mb-3 table-responsive text-center">
    <h3> Histórico do visitante  </h3>
    <div>
        <a class="link-success justify-content-end" href=" {{ route('admin.acesso.form', $visitante->id)}} "><i class="bi bi-plus-circle" style="font-size: 2rem;"></i></i></a>
    </div>
    <hr>
</div>

<div class="col-md-9 mx-auto mb-3 table-responsive text-center">
    <table class="table table-striped table-bordered rouded align-middle">

        <thead>

            <tr>

                {{--<th scope="colgroup">Id visitante</th>--}}
                <th scope="colgroup">Data e Hora</th>
                <th scope="colgroup">Andar</th>
                <th scope="colgroup">Responsável</th>

                <th scope="colgroup">Observação</th>
                {{--<th scope="colgroup"> * </th>--}}

            </tr>
        </thead>


        <tbody>

            @foreach ($acessos as $acesso)

                <tr>

                {{--<td scope="col"> {{ $acesso->id_visitante }} </td>--}}

                <td scope="col"> {{$acesso->created_at->format('d/m/Y H:i:s')}} </td>

                <td scope="col"> {{$acesso->andar}} </td>

                <td scope="col"> {{ $acesso->responsavel}} </td>


                <td scope="col"> <span title="{{ $acesso->observacao }}">{{ substr($acesso->observacao, 0, 15)  }} </span> </td>

                {{--<td scope="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#obs">
                        <i class="bi bi-three-dots"></i>
                      </button>

                      <div class="modal fade" id="obs" tabindex="-1" aria-labelledby="obs" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="obs">Observação</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              @foreach ( $acessos as $acesso)
                                  {{$acesso->observacao}}
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>

                </td>--}}

            </tr>
            @endforeach

</tbody>
</table>



</div>

{{--<div class="row">
    {{ $visitas->links('vendor.pagination.bootstrap-5') }}
</div> --}}

@endsection
