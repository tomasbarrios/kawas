@extends('layouts.admin')
@section('principal')
	<h1>Lista de Usuarios</h1>
		<hr>
@endsection
@section('botones')
	<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
		<a class="btn btn-default" href="{{ URL::to('/admin/usuarios') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
		<a class="btn btn-primary" href="{{ URL::to('/admin/usuarios/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
	</div>
	<hr>

@endsection

@section('content')
	@if (Session::has('message'))
	<div class="row">
		<div class="col-md-12">
			    <div class="alert alert-danger alert-dismissible fade in" role="alert">
			    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	  <span aria-hidden="true">&times;</span>
			    	</button>
			    	{{ Session::get('message') }}

			    </div>
		</div>
	</div>
		
	@endif
	<div class="col-md-11">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
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
								
								{{ Form::open(array('route' => array('admin.usuarios.destroy', $user->id), 'method' => 'delete')) }}
									<a href="{{ route('admin.usuarios.edit', $user->id) }}" class="btn btn-primary btn-xs">Editar</a>
									@if(Auth::user()->email != $user->email)
								    	<button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
								    @endif
								{{ Form::close() }}
							</td>

						</tr>
						@endforeach
					</tbody>

				</table>


			</div>

				<div align="center">
					{!! $users->render() !!}

				</div>
		
		</div>	
	</div>
@endsection