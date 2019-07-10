@extends('principal')

@section('conteudo-principal')

<h2>Editar Fabricante</h2>
<hr />

<form method="post" action="{{url('/fabircantes/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$fabricante->id}}">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" name="nome" type="text"
        value="{{$fabricante->nome}}">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

<div class="form-group">
        <label for="cidade">Cidade</label>
        <input id="cidade" class="form-control" name="nome" type="text"
        value="{{$fabricante->cidade}}">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
