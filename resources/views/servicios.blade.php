@extends('layouts.default')

@section('content')
<body style="background-image: url('img/servicios.jpg'); background-repeat: no-repeat;  background-size: cover; background-attachment: fixed;

 ">

    <!-- Page Content -->
<div style="background-color: rgba(0, 0, 0, 0.21); padding-top: 80px; padding-bottom: 40px;">
    <div class="container">

        <div class="col-md-6 col-md-offset-3" align="center" style="padding-bottom: 50px;">

        	<h1 style="color:#fff; text-transform:uppercase;">Servicios</h1>



            <hr>

        </div>



        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-coffee fa-5x" aria-hidden="true"></i>

            <h2 >Insumos</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Consigue los insumos necesarios para  mantener una estación de café en condiciones óptimas.</p>

        </div>



        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-cog fa-5x" aria-hidden="true"></i>

            <h2 >Equipos</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Cotiza equipamiento para imlpementar una estación de café completa. Desde máquinas 

                de espresso y equipos de filtrado, hasta molinos y portafiltros.</p>



        </div>



        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-trophy fa-5x" aria-hidden="true"></i>

            <h2 >Mantenciones</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">

                Realizamos mantenciones períódicas o esporádicas a máquinas y equipos en cualquier estación de café, ya sea bar, cafeteria, restorán, hotel u oficina. 



            </p>



        </div>       

        @include('includes.contacto')

    </div>

</div>

@endsection
