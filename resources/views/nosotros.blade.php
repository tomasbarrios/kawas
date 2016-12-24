@extends('layouts.default')

@section('content')

<body style="background-image: url('img/nosotros.jpg'); background-repeat: no-repeat;  background-size: cover; background-attachment: fixed;

 ">

    <!-- Page Content -->
    <div style="background-color: rgba(0, 0, 0, 0.21); padding-top: 80px; padding-bottom: 40px;">
    <div class="container">

        <div class="row" style="    margin-bottom: 30px;">


        <div class="col-md-6 col-md-offset-3" align="center">

            <h1 style="color:#fff; font-size:65px">La Rostería</h1>

                        <hr>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Fundada a inicios del 2014, Kawas Rostería de Café se dedica a importar granos de alta calidad desde orígenes únicos, a tostar con un proceso especializado que revela el potencial de cada origen, y a distribuir un café excepcional, fresco y a tiempo.</p>

        </div>

        </div>
        <div class="row">
        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-thumbs-o-up fa-5x" aria-hidden="true"></i>

            <h2 style="color:#FF9233;;">Comercio Justo</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Trabajamos directamente con las fincas de café, acortando la cadena de suministro y transfiriendo mayores beneficios a los productores.</p>

        </div>



        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-wpforms fa-5x" aria-hidden="true"></i>
            
            <h2 style="color:#FF9233;;">Especialidad</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Nuestros granos son 100% arábigos de origen único y sin defectos. Han pasado por procesos adecuados de cultivo, cosecha, almacenaje y tostado. Lo que permite asegurar un café fresco, que mantiene los aceites, aromas y sabores en su máximo potencial.</p>



        </div>



        <div class="col-md-4" style="text-align:center">

            <i class="fa fa-tree fa-5x" aria-hidden="true"></i>

            <h2 style="color:#FF9233;;">Medio Ambiente</h2>

            <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Nuestros proveedores son fincas que han implementado procesos amigables con el medio ambiente y producido granos orgánicos.</p>



        </div>       

        </div>

        <div class="row">

        @include('includes.contacto')
        
        </div>

    </div>
</div>

@endsection