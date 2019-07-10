
@extends('main')

@section('content-main')
<h2>Fabricantes</h2>

<a href="{{url('/fabricantes/form-adicionar')}}" class="btn btn-primary float-right mb-2">
    Adicionar</a>

<table class="table table-dark">
    <tr>
        <th>Id</th>
        <th>Nome</th>
         <th>cidade</th>
         <th>produto</th>
        <th>Opções</th>
    </tr>
    @forelse ($fabricantes as $fabricante)
        <tr>
            <td> {{$fabricante->id}} </td>
            <td> {{$fabricante->nome}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/fabricantes/editar/' . $fabricante>id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/fabricantes/excluir/' . $fabricante->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">não há fabricantes cadastrados.</td>
        </tr>
    @endforelse
</table>
@endsection
