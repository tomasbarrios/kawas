@extends('layouts.admin')
@section('principal')
	<h1>Categorías</h1>
	
@endsection
@section('botones')
	<div class="col-md-12">
		<a class="btn btn-primary" href="categories/create"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nueva categoría</a>
		<hr>
	</div>

@endsection

@section('content')
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>E-Mail</th>
				<th>Operación</th>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>

					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						
						{{ Form::open(array('route' => array('usuarios.destroy', $user->id), 'method' => 'delete')) }}
							<a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary">Editar</a>
						    <button type="submit" class="btn btn-danger">Eliminar</button>
						{{ Form::close() }}
					</td>

				</tr>
				@endforeach
			</tbody>

		</table>
		{!! $users->render() !!}
	</div>	
@endsection