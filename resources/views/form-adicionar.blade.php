@extends('main')

@section('content-main')

<h2>Adicionar Produto</h2>
<hr />

<form method="post" action="{{url('/produtos/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="nome">Nome</label>
        <input value="{{old('nome')}}" id="nome" class="form-control" name="nome" type="text">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="peso">Peso</label>
       <input value="{{old('peso')}}" id="peso" class="form-control" name="peso" type="text">

        @error('peso')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

@endsection
