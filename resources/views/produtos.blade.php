
@extends('main')

@section('content-main')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h2>Produtos</h2>

<a href="{{url('/produtos/form-adicionar')}}" class="btn btn-primary float-right mb-2">
    Adicionar</a>

<table class="table table-dark">
    <tr>
        <th>Id</th>
        <th>nome/th>
        <th>peso</th>
        <th>Opções</th>
    </tr>
    @forelse ($produtos as $produto)
        <tr>
            <td> {{$produto->id}} </td>
            <td> {{$produto->nome}} </td>
            <td> {{$produto->peso}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/produtos/editar/' . $produto->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/produtos/excluir/' . $produto->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Sem produtos cadastrados.</td>
        </tr>
    @endforelse
</table>
@endsection
