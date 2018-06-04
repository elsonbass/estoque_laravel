@extends('principal')

@section('conteudo')

    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    <h2>Área Restrita</h2>

    <form action="/login" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label class="col-sm-2 col-form-label">E-mail</label>
            <input name="email" type="email" class="form-control">
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label">Senha</label>
            <input name="password" type="password" class="form-control">
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Entrar</button>
                <a href="/"><button class="btn btn-warning">Cancelar</button></a>
            </div>
        </div>
    </form>

@stop