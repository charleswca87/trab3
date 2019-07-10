@extends('main')

@section('content-main')

<h2>Adicionar Fabricante</h2>
<hr />

<form method="post" action="{{url('/fabricantes/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Nome</label>
        <input value="{{old('nome')}}" id="nome" class="form-control" name="nome" type="text">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
 <div class="form-group">
        <label for="cidade">Cidade</label>
        <input value="{{old('cidade')}}" id="cidade" class="form-control" name="cidade" type="text">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div> <div class="form-group">
        <label for="produto">Produto</label>
        <input value="{{old('produto')}}" id="produto" class="form-control" name="produto" type="text">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
