@extends('layout')
@section('cabecalho')
Lista de nome para animais
@endsection

@section('conteudo')
<div class="grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">                               
            <div class="ml-4 text-lg leading-7 font-semibold"><a href="/adicionar" class="btn btn-dark mb-2">Adicionar</a></div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <ul class="list-group">            
                    <?php foreach ($nomes as $nome): ?>
                        <li class="list-group-item"><?=$nome?></li>
                    <?php endforeach; ?>      
                </ul>
            </div>
        </div>
    </div>                       
</div>  
@endsection