<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fabricante;

use App\Http\Requests\FabricanteRequest;

class FabbricanteController extends Controller
{

    public function fabricantes()
    {

        $info = Fabricante::all();
        return view('fabricantes.fabricantes')->with('fabricantes', $info);
    }

       public function formAdicionar()
    {
        return view('fabricantes.form-adicionar');
    }

      public function adicionar(FabricanteRequest $request)
    {

          Fabricante::create($request->input());

        return redirect()->action('FabricanteController@fabricantes');

    }

    public function excluir($id)
    {
        Fabricante::destroy($id);

        return redirect()->action('FabricanteController@Fabricantes');
    }

    public function form_editar($id)
    {

        $fabricante = Fabricante::find($id);

        return view('fabricantes.form-editar')->with('fabricante', $fabricante);

    }

    public function editar(FabricanteRequest $request)
    {

        //Via atribuicao em massa
        Fabricante::find($request->id)->update($request->input());

        return redirect()->action('FabricanteController@fabricantes');
    }
}
