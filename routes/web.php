<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    // return view('pizzas');
    $pizza = [
        ['type' =>'hawaiian', 'base' => 'cheesy crust'],
        ['type' =>'volcano', 'base' => 'garlic crust'],
        ['type' =>'veg supreme', 'base' => 'thin & crispy']
    ];



    return view('pizzas', [
        'pizzas'=> $pizza,
        'name'=> request('name'),
        'age'=> request('age')
    ]);
    // return view ('pizzas',['type'=> 'hawaiian', 'base'=>'cheesy crust']);
    
});
