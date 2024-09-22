<!DOCTYPE html>
<html>
<head>
    <title>Pizza House</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Welcome to Pizza House</h1>
    <div class="menu">
        Pizza List
    </div>
    <p> {{$type}} - {{$base}} - {{$price}}</p>
    @if($price > 15)    
        <p>This pizza is expensive</p>
        @elseif($price<5)
        <p>This pizza is cheap</p>
        @else
        <p>This pizza is normally priced</p>

        @endif
    
{{--the statement must be false to display below--}}

        @unless($base == 'cheesy crust')
        <p>You don't have a cheesy crust</p>
        @endunless


    @php
    $name ='shaun';
    echo($name);
    @endphp
</body>
</html>