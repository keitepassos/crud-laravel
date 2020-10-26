<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{

    public function show(Request $request){
        
        $animals = Animal::all();
       
        return view ('animals.show', compact('animals'));
    }

    public function create(){
       
        return view ('animals.create');
    }

    public function store(Request $request){
        
        $animals = Animal::create($request->all());

        echo "Animal id ($animals->id) nome: ($animals->name)";
    }

}
