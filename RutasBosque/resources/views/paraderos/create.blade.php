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

    <h1>Ingresa un nuevo paradero</h1>



    {!! Form::open(['url'=>'paraderos']) !!}

    {!! Form::hidden('user_id',1)  !!}



    {!! Form::label('nombre','Nombre:') !!}
    {!! Form::text('nombre',null,['class'=>'form-control']) !!}



    {!! Form::label('posicion_X','Posicion_X:') !!}
    {!! Form::text('posicion_X',null,['class'=>'form-control']) !!}

    {!! Form::label('posicion_Y','Posicion_Y:') !!}
    {!! Form::text('posicion_Y',null,['class'=>'form-control']) !!}




    {!!Form::submit('Agregar Paradero',['class'=>'btn btn-primary form-control'])!!}


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