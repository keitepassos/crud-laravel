<?php

namespace App\Http\Controllers;

use App\Models\nomes;
use Illuminate\Http\Request;

class NomesController extends Controller
{

    public function show(Request $request){
        
        $nomes = [
            'Anakin',
            'Lea',
            'Cheetara',
            'Jailson'
        ];

        return view ('nomes.show', compact('nomes'));
    }

    public function create(){
       
        return view ('nomes.create');
    }

}
