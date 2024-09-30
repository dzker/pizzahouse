@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/pizza_logo.jpg" alt="pizza logo" class="logo">
        <div class="title m-b-md">
            Pizza House<br />
            The North's Best Pizzas
        </div>
       {{--This message will print after ordering using routes in PizzaController.php this is a comment --}}
        <p class="mssg"> {{session('mssg')}}</p> 
        <a href="/pizzas/create">Order a Pizza</a>

        @vite(['resources/scss/app.scss','resources/css/app.css', 'resources/js/app.js'])
    </div>
    
</div>
@endsection

