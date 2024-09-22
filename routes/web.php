<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    // return view('pizzas');
    $pizza = [
        'type' =>'hawaiian', 
        'base' => 'garlic crust',
        'price' => 10
    
    ];
    return view('pizzas', $pizza);
    // return view ('pizzas',['type'=> 'hawaiian', 'base'=>'cheesy crust']);
});
