@extends('layouts.admin')
@section('principal')
    <h1>Editar Nombre Categoría</h1>
        <hr>
@endsection
@section('content')
    @if($errors->has())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>

    @endif

    {!! Form::open(['route'=>['categories.update',$categoria], 'method'=>'PUT']) !!}
        {!! csrf_field() !!}
        <div class="form-group">
            {!! Form::label('categoria', 'Nombre') !!}
            {!! Form::text('categoria', $categoria->categoria, ['class'=> 'form-control', 'placeholder'=>'Nombre Completo', 'required']) !!}

        </div>
        <div class="form-group">
            {!! Form::submit('Guardar Usuario', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
