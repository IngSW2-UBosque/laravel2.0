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
    <h1>Reservas</h1>
    @foreach($reservas as $reservas)
        <article>
            <h2> {{$reservas->fecha_generacion}}</h2>
            <div class="body">{{$reservas->estado_reserva}}</div>
        
        </article>
    @endforeach

</div>
</body>
</html>
