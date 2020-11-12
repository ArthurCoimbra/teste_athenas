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
        </tr>
      </thead>
      <tbody>
        @foreach ($pessoas as $pessoa)
        <tr>
          <th scope="row">{{ $pessoa->id }}</th>
          <td>{{ $pessoa->nome }}</td>
          <td>{{ $pessoa->email }}</td>
          <td>{{ $pessoa->categoria_id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <a href="/pessoas/create"  class="btn btn-primary">Criar Nova Pessoa</a>
  </div>


@endsection