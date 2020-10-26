@extends('layout')
@section('cabecalho')
Adicionar nome para animais
@endsection

@section('conteudo')
<div class="grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">        
        <div class="ml-12">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                <form method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <button class="btn btn-success">Adicionar</button>
                </form>
            </div>
        </div>
    </div>                       
</div>  
@endsection