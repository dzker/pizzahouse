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
   
   
    <!-- @for($i=0; $i<5; $i++)
    <p>the value of is is {{$i}}</p>
    @endfor -->

    <!-- @for($i=0; $i<count($pizzas); $i++);
    <p>{{$pizzas[$i]['type']}}</p>
    @endfor -->

    @foreach ( $pizzas as $pizza )
    <div>
     {{$loop->index}}   {{$pizza['type']}} - {{$pizza['base']}}
     @if ($loop->first)
        <span> - first in the loop</span>
     
     @endif
     
     @if($loop->last)
     <span>- last in the loop</span>
     @endif
    </div>
    
    @endforeach
</body>
</html>