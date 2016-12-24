@extends('layouts.admin')
@section('principal')
	<h1>Crear Categorías</h1>
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
	    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	@endif
	{!! Form::open(['route'=>'admin.categories.store', 'method'=>'POST']) !!}
	    {!! csrf_field() !!}
	    <div class="form-group">
	        {!! Form::label('categoria', 'Categoría') !!}
	        {!! Form::text('categoria', null, ['class'=> 'form-control', 'placeholder'=>'Nombre Categorìa']) !!}

	    </div>
	    <div class="form-group">
	        {!! Form::submit('Crear Categorìa', ['class'=>'btn btn-primary']) !!}
	    </div>
	{!! Form::close() !!}

@endsection