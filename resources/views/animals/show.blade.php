@extends('layout')
@section('cabecalho')
Lista de nome para animais
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success alert-dismissible fade show" role="alert">    
    <strong>Mensagem</strong><p>{{ $mensagem }}</p>
</div>

@endif
<div class="grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">                               
            <div class="ml-4 text-lg leading-7 font-semibold"><a href="/animal/adicionar" class="btn btn-primary mb-2">Adicionar</a></div>
        </div>
        <div class="ml-12">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <ul class="list-group">            
                    <?php foreach ($animals as $animals): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">{{$animals->name}}
                            <form method="post" action="/animal/remover/{{ $animals->id}}" onsubmit="return confirm('Tem certeza que deseja remover este registro? {{ addslashes( $animals->name )}}')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </li>
                    <?php endforeach; ?>      
                </ul>
            </div>
        </div>
    </div>                       
</div>  
@endsection