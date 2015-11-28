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


    <h1> Edit {!! $ruta->nombre_ruta !!}</h1>

    {!! Form::hidden('user_id',1)  !!}

    {!! Form::model($ruta,['method'=>'PATCH','action'=>['RutasController@update',$ruta->id]]) !!}

    {!! Form::label('nombre_ruta','Nombre_ruta:') !!}
    {!! Form::text('nombre_ruta',null,['class'=>'form-control']) !!}


    {!!Form::submit('Actualizar Ruta',['class'=>'btn btn-primary form-control'])!!}


    {!! Form::close() !!}

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif




</div>
</body>
</html>
