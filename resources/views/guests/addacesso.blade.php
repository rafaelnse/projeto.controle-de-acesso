@extends('site/layout')
@section('title', 'Adicionar acesso')
@section('conteudo')


<br>
<div class="col-md-6 mx-auto mb-3 shadow-lg rounded-4 border border-secondary bg-secondary-subtle text-emphasis-secondary">
    <span class="d-block p-4 ">
        <h3>Adicionar visita de {{ $visitante->nome }}</h3>


    <form action="{{route('admin.acesso.store')}}" method="post">
        @csrf
        <input type="hidden" name="id_user" id="id_user" value=" {{ auth()->user()->id }} ">
        <input type="hidden" name="id_visitante" id="id_visitante" value=" {{ $visitante->id }} ">

        <div class="input-group mb-3">
            <label class="input-group-text border-secondary focus-ring" for="andar" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">Andar</label>
            <select class="form-select  border-secondary focus-ring" type="int" name="andar" id="andar" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
              <option selected>Informe o andar</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
            </select>
        </div>

        <label for="responsavel" class="col-form-label">Responsável: </label>
            <input type="text" name="responsavel" class="validate form-control border-secondary focus-ring" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">

        <div class="input-group mb-3">
            <label for="observacao" class="input-group" for="observacao" >Observação/Motivo</label>
            <textarea class="form-control validate border-secondary focus-ring" name="observacao" id="observacao" rows="3" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)"></textarea>
        </div>


        <a type="button" class="btn btn-danger" href="{{ route('visitante.detalhes', $visitante->id) }}">Cancelar</a>
        <button type="submit" class="btn btn-success">Adicionar visita</button>
    </form>

</div>

@endsection
