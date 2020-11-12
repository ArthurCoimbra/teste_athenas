@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="font-weight-bold">Pessoas</h1>
    <br/>

    <table class="table">
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
            <form action="/pessoas/{{$pessoa->id}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <a href="/pessoas/create"  class="btn btn-primary">Criar Nova Pessoa</a>
  </div>


@endsection
