<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

//The route is ordered from the most above to the most below for priority
Route::get('/pizzas',[PizzaController::class,'index'] )->name('pizzas.index')->middleware('auth');
Route::get('pizzas/create' , [PizzaController::class, 'create'])->name('pizzas.create');  
Route::post('pizzas', [PizzaController::class, 'store'])->name('pizzas.store');  
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');



Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
