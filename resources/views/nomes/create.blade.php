@extends('layout')

@section('cabecalho')
Adicionar nome para animais
@endsection

@section('conteudo')

<form method="post">
    <div class="input-group">
        <input type="text" class="form-control" name="nome">
    </div>
    <button class="btn btn-success">Adicionar</button>
</form>
@endsection