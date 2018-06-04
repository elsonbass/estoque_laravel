<?php

namespace estoque\Http\Controllers;

use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;
use Auth;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
    }

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

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->action('ProdutoController@lista');
    }

    public function novo()
    {
        return view('formulario')->with('categorias', Categoria::all());
    }

    public function adiciona(ProdutoRequest $request)
    {
        Produto::create($request->all());
        return redirect('/produtos')->withInput();
    }
}
