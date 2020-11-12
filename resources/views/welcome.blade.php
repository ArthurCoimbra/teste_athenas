@extends('layouts.app')

@section('content')
  <div class="jumbotron col-6">
    <h1 class="display-4">Bem vindo!</h1>
    <p class="lead">Esse é um protótipo para o teste da empresa Athenas.</p>
    <hr class="my-4">
    <p>Selecione a lista desejada:</p>
        <a href="/categorias" class="btn btn-primary btn-lg btn-block">Categorias</a>

          <a href="/pessoas" class="btn btn-primary btn-lg btn-block">Pessoas</a>
  </div>
@endsection
