@extends('main')

@section('content-main')

<h2>Editar Produto</h2>
<hr />

<form method="post" action="{{url('/produtos/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$produto->id}}">

    <div class="form-group">
        <label for="nome">nome</label>
        <input id="titulo" class="form-control" name="nome" type="text"
        value="{{$produto->nome}}">

        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

      <div class="form-group">
        <label for="peso">Peso</label>
        <input id="peso" class="form-control" name="peso" type="text" value="{{$produto->peso}}"">

        @error('texto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
