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
}
