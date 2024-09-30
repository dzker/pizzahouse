<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

//The route is ordered from the most above to the most below for priority
Route::get('/pizzas',[PizzaController::class,'index'] );
Route::get('pizzas/create' , [PizzaController::class, 'create']);   
Route::post('pizzas', [PizzaController::class, 'store']);  
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
