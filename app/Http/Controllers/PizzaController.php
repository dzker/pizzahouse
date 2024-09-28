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

    public function store() {
        //Create pizza model first before post the data
        $pizza = new Pizza();

        //Methods to store the data
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        
        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }
}
