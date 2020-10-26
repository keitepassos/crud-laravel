<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Requests\AnimalsFormRequest;

class AnimalsController extends Controller
{

    public function show(Request $request){
        
        $animals = Animal::query()->orderBy('name') ->get();
        $mensagem = $request->session()->get('mensagem');
        return view ('animals.show', compact('animals', 'mensagem'));
    }

    public function create(){
       
        return view ('animals.create');
    }

    public function store(AnimalsFormRequest $request){
       
        $animals = Animal::create($request->all());
        $request->session()
        ->flash(
            'mensagem',
            "[ {$animals->id}] Criado com sucesso {$animals->name}"
            );
            return redirect()->route('listar_animais');
    }

    public function destroy (Request $request)
    {
        Animal::destroy($request->id);
        $request->session()
        ->flash(
            'mensagem',
            "Registro removido com sucesso"
            );
    
        return redirect()->route('listar_animais');
    
    }

}
