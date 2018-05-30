@extends('principal')

@section('conteudo')

    <h2>Preencha o Formulário</h2>
    <form action="/produtos/adiciona" method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome</label>
            <input name="nome" type="text" class="form-control">
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Valor</label>
            <input name="valor" type="text" class="form-control">
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Quantidade</label>
            <input name="quantidade" type="text" class="form-control">
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </form>
    
@stop