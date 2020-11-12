@extends('layouts.app')

@section('content')
  <div class="jumbotron col-6">
    <h1 class="display-4">Bem vindo!</h1>
    <p class="lead">Esse é um protótipo para o teste da empresa Athenas.</p>
    <hr class="my-4">
    <p>Selecione o CRUD desejado:</p>
    <p class="lead">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="/categorias">Categorias</a>
        </li>

        <li class="list-group-item">
          <a href="/pessoas">Pessoas</a>
        </li>
      </ul>
    </p>
  </div>
@endsection
