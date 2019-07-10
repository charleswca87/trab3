<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;

//importar o modelo post
use App\Produto;

//importar o modelo categoria
use App\Fabricante;

//Importando a classe de Validação
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller
{
    //


    public function produtos()
    {

        $prod = Produto::all();

        return view('produtos')->with('produtos', $prod);
    }

        public function formAdicionar()
    {
        $fabricantes = Fabricante::all();

        return view('form-adicionar')->with('fabricantes', $fabricantes);
    }


    public function adicionar(ProdutoRequest $request)
    {
              Produto::create($request->input());

        return redirect()->action('ProdutoController@venda');

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        Produto::destroy($id);



        return redirect()->action('ProdutoController@venda');
    }

    public function form_editar($id)
    {
        $produto = Produto::find($id);

        $fabricantes = Fabricante::all();


        return view('form-editar')->with('produto', $produto)
        ->with('fabricantes', $fabricantes);

    }

    public function editar(ProdutoRequest $request)
    {

        Produto::find($request->id)->update($request->input());

        return redirect()->action('ProdutoController@venda');
    }

}
