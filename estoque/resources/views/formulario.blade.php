@extends('principal')

@section('conteudo')

    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    <h2>Preencha o Formulário</h2>
    <form action="/produtos/adiciona" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label class="col-form-label">Nome</label>
            <input name="nome" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-form-label">Valor</label>
            <input name="valor" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label class=" col-form-label">Quantidade</label>
            <input name="quantidade" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label class=" col-form-label">Tamanho</label>
            <input name="tamanho" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label class=" col-form-label">Categoria</label>
            <select name="categoria_id" type="text" class="form-control">
                @foreach($categorias as $c)
                    <option value="{{$c->id}}">{{$c->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label class=" col-form-label">Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
    </form>
    
@stop