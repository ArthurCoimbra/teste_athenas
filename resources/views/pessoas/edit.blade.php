@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/pessoas/{{$pessoa->id}}" method="post">
    @csrf
    @method('PATCH')

    <div class="container d-flex justify-content-center mb-3 mt-4">
      <h2 class="font-weight-bold">Editar Pessoa</h2>
    </div>
    <br/>
    <div class="form-group">
      <label for="nome" class="font-weight-bold">Nome</label>
      <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') ?? $pessoa->nome }}" autocomplete="nome" autofocus>

      @error('nome')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="email" class="font-weight-bold">Email</label>
      <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $pessoa->email }}" autocomplete="email" autofocus>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="categoria" class="font-weight-bold">Categoria</label>
      <select name="categoria"class="form-control input-lg" id="categoria">
          <option value="0" disabled>Selecione a categoria.</option>
          <option value="{{ $pessoa->categoria_id }}" selected>{{ $pessoa->nomeCategoria }}</option>
          @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Editar</button>
  </form>
</div>

@endsection
