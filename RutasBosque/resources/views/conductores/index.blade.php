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
    <h1>buses</h1>
    @foreach($conductores as $conductores)
        <article>
            <h2> {{$conductores->nombre}}</h2>
            <div class="body">{{$conductores->bus}}</div>
            <div class="body">{{$conductores->ruta}}</div>
        </article>
    @endforeach

</div>
</body>
</html>
