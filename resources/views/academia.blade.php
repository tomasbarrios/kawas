@extends('layouts.default')

@section('content')


<body style="background-image: url('img/academia.jpg'); background-repeat: no-repeat;  background-size: cover; background-attachment: fixed;

 ">

    <!-- Page Content -->
    <div style="background-color: rgba(0, 0, 0, 0.21); padding-top: 80px; padding-bottom: 40px;">
    <div class="container">

        <div class="col-md-6 col-md-offset-3" align="center" style="margin-bottom: 24px;">

        	<h1 style="color:#fff; text-transform:uppercase;">Academia</h1>



            <hr>

        </div>



        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i>

            <h2>Capacitaciones</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Perfeccionamos las habilidades para preparar café. Desde métodos de extracción, análisis sensorial y manejo de estación de trabajo, hasta calibración de equipos y Latte Art.</p>

        </div>



        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-wrench fa-5x" aria-hidden="true"></i>

            <h2>Talleres</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Realizamos talleres de tueste, catadura y barismo de café de especialidad, con instrucción práctica y teórica en base a protocolos SCAA. </p>



        </div>



        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>

            <h2>Charlas</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">
            	Impartimos charlas sobre el mundo del café para potenciar el conocimiento y atraer público. Desde su historia y evolución hasta el cultivo y dominio técnico.
          </p>



        </div>       

        @include('includes.contacto')

    </div>
    </div>
@endsection

