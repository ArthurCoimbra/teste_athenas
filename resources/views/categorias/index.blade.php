@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="font-weight-bold">Categorias</h1>
    <br/>

    @if (session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-striped text-center" id="table_categorias">
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Nome</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categorias as $categoria)
        <tr>
          <th scope="row">{{ $categoria->id }}</th>
          <td>{{ $categoria->nome }}</td>
          <td>
            <a href="/categorias/{{$categoria->id}}/edit"  class="btn btn-primary">Editar</a>
          </td>
          <td>


            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-danger button-front-page" data-toggle="modal" data-target="#modal-delete-{{ $categoria->id }}">
              Excluir
            </button>

            <div class="modal fade" id="modal-delete-{{ $categoria->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Atenção</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="/categorias/{{$categoria->id}}" method="post">
                  @csrf
                  @method('DELETE')
                    <div class="modal-body">
                      Deseja realmente remover {{ $categoria->nome }}?
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

    <a href="/categorias/create"  class="btn btn-primary">Criar Nova Categoria</a>
  </div>

@endsection
