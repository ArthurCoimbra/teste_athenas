@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/pessoas" method="post">
    @csrf
    <div class="container d-flex justify-content-center mb-3 mt-4">
      <h2 class="font-weight-bold">Adicionar Pessoa</h2>
    </div>
    <br/>
    <div class="form-group">
      <label for="nome" class="font-weight-bold">Nome</label>
      <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" autocomplete="nome" autofocus>

      @error('nome')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="email" class="font-weight-bold">Email</label>
      <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="categoria" class="font-weight-bold">Categoria</label>
      <select name="categoria" class="form-control input-lg @error('categoria') is-invalid @enderror" id="categoria">
          <option value="0" selected disabled>Selecione a categoria.</option>
          @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endforeach
      </select>

      @error('categoria')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
