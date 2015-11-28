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

    <h1>Ingresa un nuevo Usuario</h1>

    {!! Form::open(['url'=>'/auth/register']) !!}


    {!! Form::label('name','Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}

    {!! Form::label('email','E-mail:') !!}
    {!! Form::text('email',null,['class'=>'form-control']) !!}



    {!! Form::label('password','Password:') !!}
    {!! Form::text('password',null,['class'=>'form-control']) !!}


    {!! Form::label('password_confirmation','Password confirm:') !!}
    {!! Form::text('password_confirmation',null,['class'=>'form-control']) !!}



    {!!Form::submit('Agregar usuario',['class'=>'btn btn-primary form-control'])!!}


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