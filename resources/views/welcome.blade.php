@extends('layouts.default')

@section('content')

    <body style="background-image: url('img/cafe.jpg'); background-repeat: no-repeat;  background-size: cover; background-attachment: fixed;

       ">

        <!-- Page Content -->
        <div style="background-color: rgba(0, 0, 0, 0.21); padding-top: 80px; padding-bottom: 40px;">
        <div class="container">

                <div class="col-md-6 col-md-offset-3" align="center">

                        <img class="img-responsive" src="img/logo.png">

                        @include('includes.contacto')

                </div>      

        </div>

        </div>
@endsection
