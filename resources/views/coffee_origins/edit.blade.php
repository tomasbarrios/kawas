@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Coffee Origin
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($coffeeOrigin, ['route' => ['coffeeOrigins.update', $coffeeOrigin->id], 'method' => 'patch']) !!}

                        @include('coffee_origins.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection