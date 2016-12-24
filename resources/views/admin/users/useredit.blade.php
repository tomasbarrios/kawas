@extends('layouts.admin')
@section('principal')
Editar Usuario
@endsection
@section('content')

    @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>

    @endif

    {!! Form::open(['route'=>['admin.usuarios.update',$user], 'method'=>'PUT']) !!}
        {!! csrf_field() !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $user->name, ['class'=> 'form-control', 'placeholder'=>'Nombre Completo', 'required']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo Electrónico') !!}
            {!! Form::text('email', $user->email, ['class'=> 'form-control', 'placeholder'=>'ejemplo@tudominio', 'required']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class'=> 'form-control', 'required']) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('Guardar Usuario', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
