@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="font-weight-bold">Pessoas</h1>
    <br/>

    <table id="table_pessoas" class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Categoria</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pessoas as $pessoa)
        <tr>
          <th scope="row">{{ $pessoa->id }}</th>
          <td>{{ $pessoa->nome }}</td>
          <td>{{ $pessoa->email }}</td>
          <td>{{ $pessoa->nomeCategoria }}</td>
          <td>
            <a href="/pessoas/{{$pessoa->id}}/edit"  class="btn btn-primary">Editar</a>
          </td>
          <td>

            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-danger button-front-page" data-toggle="modal" data-target="#modal-delete-{{ $pessoa->id }}">
              Excluir
            </button>

            <div class="modal fade" id="modal-delete-{{ $pessoa->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Atenção</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="/pessoas/{{$pessoa->id}}" method="post">
                  @csrf
                  @method('DELETE')
                    <div class="modal-body">
                      Deseja realmente remover {{ $pessoa->nome }}?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Sim</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <a href="/pessoas/create"  class="btn btn-primary">Criar Nova Pessoa</a>
  </div>


@endsection
