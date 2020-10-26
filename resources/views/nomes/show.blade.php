@extends('layout')

@section('cabecalho')
Lista de nome para animais
@endsection

@section('conteudo')            
    <a href="/adicionar" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">            
        <?php foreach ($nomes as $nome): ?>
            <li class="list-group-item"><?=$nome?></li>
        <?php endforeach; ?>      
    </ul>
@endsection