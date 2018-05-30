<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {

        $produtos = DB::select('select * from produtos');

        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra()
    {
        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);
        return view('detalhes')->with('p', $produto[0]);
    }

    public function novo()
    {
        return view('formulario');
    }

    public function adiciona()
    {

        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');

        DB::insert('insert into produtos (nome, valor, quantidade, descricao) values (?,?,?,?)', array($nome, $valor, $quantidade, $descricao));

        return view('adicionado')->with('nome', $nome);
    }
}
