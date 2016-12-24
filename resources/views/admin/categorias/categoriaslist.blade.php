

@extends('layouts.admin')
@section('principal')
	<h1>Lista Categorías</h1>
	<hr>
@endsection
@section('botones')
	<div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
		<a class="btn btn-default" href="{{ URL::to('/admin/categories') }}"><span aria-hidden="true" class="glyphicon glyphicon-list"></span> Listar todos</a> 
		<a class="btn btn-primary" href="{{ URL::to('/admin/categories/create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span> Crear nuevo</a> 
	</div>
	<hr>

@endsection



@section('content')

	@if (Session::has('message'))
		
	    <div class="alert alert-success">
	    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	    	{{ Session::get('message') }}
	    </div>

	@endif

	@if (Session::has('error'))

	    <div class="alert alert-danger">
	    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	    	{{ Session::get('error') }}
	    </div>
	    
	@endif
	<div class="col-md-11">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<th>ID</th>
						<th>Nombre</th>
						<th>Operación</th>
					</thead>
					<tbody>
						@foreach($categories as $categoria)
						<tr>

							<td>{{ $categoria->id }}</td>
							<td>{{ $categoria->categoria }}</td>
							<td>
								
								{{ Form::open(array('route' => array('admin.categories.destroy', $categoria->id), 'method' => 'delete')) }}
									<a href="{{ route('admin.categories.edit', $categoria->id) }}" class="btn btn-primary">Editar</a>
								    <button type="submit" class="btn btn-danger">Eliminar</button>
								{{ Form::close() }}
							</td>

						</tr>
						@endforeach
					</tbody>

				</table>
				{!! $categories->render() !!}
			</div>
		</div>
	</div>
@endsection