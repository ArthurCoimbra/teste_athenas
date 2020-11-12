@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="font-weight-bold">Categorias</h1>
    <br/>

    <table class="table">
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
            <form action="/categorias/{{$categoria->id}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <a href="/categorias/create"  class="btn btn-primary">Criar Nova Categoria</a>
  </div>


@endsection
