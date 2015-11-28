<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Paraderos</h1>
    @foreach($paraderos as $paraderos)
        <article>
            <h2> {{$paraderos->nombre}}</h2>
            <div class="body">{{$paraderos->posicion_X}}</div>
            <div class="body">{{$paraderos->posicion_Y}}</div>






        </article>
    @endforeach

</div>
</body>
</html>
