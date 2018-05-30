<?php

namespace estoque\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Produto::all();
        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        return view('detalhes')->with('p', $produto);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }

    public function novo()
    {
        return view('formulario');
    }

    public function adiciona()
    {
        $validator = Validator::make(
          ['nome' => Request::input('nome')],
          ['nome' => 'required|min:3']
        );

        if($validator->fails())
        {
            $validator->messages();
            return redirect('/produtos/novo');
        }

        Produto::create(Request::all());
        return redirect('/produtos')->withInput();
    }

}
