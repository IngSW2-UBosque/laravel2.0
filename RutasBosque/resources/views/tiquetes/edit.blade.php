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


    <h1> Edit {!! $tiquete->fecha_generacion !!}</h1>

    {!! Form::hidden('user_id',1)  !!}

    {!! Form::model($tiquete,['method'=>'PATCH','action'=>['TiquetessController@update',$tiquete->id]]) !!}

    {!! Form::label('fecha_generacion','Fecha_generacion:') !!}
    {!! Form::text('fecha_generacion',null,['class'=>'form-control']) !!}

    {!! Form::label('fecha_uso','Fecha_uso:') !!}
    {!! Form::text('fecha_uso',null,['class'=>'form-control']) !!}

    {!!Form::submit('Actualizar Tiquete',['class'=>'btn btn-primary form-control'])!!}

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
