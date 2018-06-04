@extends('principal')

@section('conteudo')
<h1>Listagem de Produtos</h1>

@if(old('nome'))
    <div class="alert alert-success">
        Produto {{old('nome')}} adicionado com sucesso!
    </div>
@endif

<div class="container">
    <table class="table">
        <thead style="background: #090909;color: #ffffff">
            <td>NOME</td>
            <td>VALOR</td>
            <td>DESCRIÇÃO</td>
            <td>QUANTIDADE</td>
            <td>TAMANHO</td>
            <td>CATEGORIA_ID</td>
            <td>AÇÃO</td>
        </thead>
        <tbody>
            @foreach($produtos as $p)
                <tr class="{{$p->quantidade <=1 ? 'danger' : ''}}">
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->valor }}</td>
                    <td>{{ $p->descricao }}</td>
                    <td>{{ $p->quantidade }}</td>
                    <td>{{ $p->tamanho }}</td>
                    <td>{{ $p->categoria_id->nome }}</td>
                    <td>
                        <a href="/produtos/mostra/{{$p->id}}">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        <a href="/produtos/remove/{{$p->id}}">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop