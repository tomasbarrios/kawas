@extends('layouts.default')

@section('content')
	<body style="background-image: url('img/contacto.jpg'); background-repeat: no-repeat;  background-size: cover; background-attachment: fixed;

	 ">
	 <div style="background-color: rgba(0, 0, 0, 0.21); padding-top: 80px; padding-bottom: 40px;">
	 	<div class="container">


	 		<div class="col-md-12" align="center" style="    margin-bottom: 30px;">

	 			<h1 style="color:#fff; text-transform:uppercase;">Contáctate</h1>

	 		    <hr>

	 		     <p style="font-family:Georgia, Geneva, sans-serif; font-size:16px">Escríbenos o llámanos para hacer <br> consultas o pedidos de café. <br> Gracias!</p>

	 		</div>
	 		<div class="row" style="margin-bottom: 30px;">
	 			<div align="center" class="col-md-3 col-md-offset-3">
	 				<i class="fa fa-envelope-o fa-5x" aria-hidden="true"></i>
	 				<br>
	 				<a href="mailto:contacto@kawas.cl">contacto@kawas.cl</a>
	 			</div>
	 			<div align="center" class="col-md-3">
	 				<i class="fa fa-phone fa-5x" aria-hidden="true"></i>
	 				<br>
	 				<a href="tel:+56996000305">(+569) 9600 0305</a>
	 			</div>


	 		</div>
	    <!-- Page Content -->
		   <div class="row">
		   		<div class="container">
		            <div class="col-md-8 col-md-offset-2" style="    margin-bottom: 50px;">
		                <h3>Contáctate con Nosotros</h3>
		                <form name="sentMessage" id="contactForm" method="POST" action="{{ URL::to('/contacto') }}">
		                	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		                    <div class="control-group form-group">
		                        <div class="controls">
		                            <label class="labelcolor">Nombre:</label>
		                            <input type="text" class="form-control" id="name" name="name">
		                            <p class="help-block"></p>
		                        </div>
		                    </div>
		                    <div class="control-group form-group">
		                        <div class="controls">
		                            <label class="labelcolor">Numero de telefono:</label>
		                            <input type="tel" class="form-control" id="phone" name="phone">
		                        </div>
		                    </div>
		                    <div class="control-group form-group">
		                        <div class="controls">
		                            <label class="labelcolor">Email:</label>
		                            <input type="email" class="form-control" id="email" name="email">
		                        </div>
		                    </div>
		                    <div class="control-group form-group">
		                        <div class="controls">
		                            <label class="labelcolor">Mensaje:</label>
		                            <textarea rows="5" cols="50" class="form-control" id="message" name="message" maxlength="999" style="resize:none"></textarea>
		                        </div>
		                    </div>
		                    <div id="success"></div>
		                    <!-- For success/fail messages -->
		                    <button type="submit" class="btn btn-primary bgcolor" style="min-width:100%;">Enviar Mensaje</button>
		                </form>
		            </div>
	       		</div>
	       	</div>
	       </div>
	   </div>

	</div>
@endsection