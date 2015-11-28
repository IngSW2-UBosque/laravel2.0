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

    <h1>Ingresa un nuevo Rol</h1>



    {!! Form::open(['url'=>'rols']) !!}

    {!! Form::hidden('user_id',1)  !!}

    {!! Form::label('nombre_rol','Nombre_rol:') !!}
    {!! Form::text('nombre_rol',null,['class'=>'form-control']) !!}

    {!!Form::submit('Agregar Rol',['class'=>'btn btn-primary form-control'])!!}


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