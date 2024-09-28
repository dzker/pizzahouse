<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
      
// $pizza = Pizza::all();
// $pizza = Pizza::orderBy('name','desc')->get();
// $pizza = Pizza::where('type','hawaiian')->get();
$pizza = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas'=> $pizza
          
        ]);
    }

    public function show($id){

$pizza = Pizza::findOrFail($id);
        
        return view('pizzas.show', ['pizza' => $pizza]);    
    }

    public function create() {
        return view('pizzas.create');
    }
}
