@extends('layouts.admin')
@section('principal')

<h1>Crear Catálogo</h1>
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

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nuevo catálogo
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        {{ Form::open(array('url' => 'admin/catalog', 'files' => true)) }}
                            <div class="form-group col-md-6">
                                {{ Form::label('name', 'Nombre') }}
                                {{ Form::text('name', old('name'), array('class' => 'form-control')) }}
                            </div>


                            <div class="clearfix"></div>
                            <div class="form-group col-md-6">
                             {{ Form::label('checkbox', 'Categorías producto') }}
                             <div class="clearfix"></div>   
                             @foreach($categorias as $categoria)
                                <label class="checkbox-inline cadaCategoria">
                                  <input type="checkbox" name="categorias[]" id="categorias-{{ $categoria->id }}" value="{{ $categoria->id }}"> {{ $categoria->categoria }}
                                </label>
                             @endforeach
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="form-group col-md-6">
                                {{ Form::label('description', 'Descripción') }}
                                {{ Form::textarea('description', old('description'), array('class' => 'form-control')) }}
                                <p class="help-block">Máx 160 caracteres.</p>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group col-md-6">
                                <label for="imagen">Imagen catálogo</label>
                                <input type="file" id="imagen" name="imagen">
                                <p class="help-block">570x800px. Sólo permitido archivos JPG máx (1MB)</p>
                            </div>
                            
                            <div class="clearfix"></div>
                            
                            <div class="form-group col-md-6">
                                {{ Form::submit('Crear catálogo', array('class' => 'btn btn-primary btn-lg')) }}
                            </div>

                        {{ Form::close() }}

                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
<script type="text/javascript">
tinymce.init({
  selector: 'textarea',
  height: 500,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});
</script>
@endsection
