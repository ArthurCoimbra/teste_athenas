@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/categorias/{{$categoria->id}}" method="post">
    @csrf
    @method('PATCH')
    <div class="container d-flex justify-content-center mb-3 mt-4">
      <h2 class="font-weight-bold">Editar Categoria</h2>
    </div>
    <br/>
    <div class="form-group">
      <label for="nome" class="font-weight-bold">Nome</label>
      <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') ?? $categoria->nome }}" autocomplete="nome" autofocus>

      @error('nome')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
</div>

@endsection
