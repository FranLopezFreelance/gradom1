@extends('layouts.head-front')

@section('content')
<div class="main-container no-sidebar">
	<div class="container">
		<nav class="woocommerce-breadcrumb breadcrumbs">
			<a href="/">Home</a>
			Contacto
		</nav>
	</div>
	<div class="container">
		<!-- <div class="google-map">
	        <div id="canvas-for-google-map" style="height:100%; width:100%;max-width:100%;"><iframe height="355" src="https://www.google.com/maps/embed/v1/place?q=Hà+Noi,+Hanoi,+Vietnam&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div>
	    </div> -->
		<div class="form-contact">
		    <div class="row">
		    	<div class="col-sm-8">
	    			<h3 class="form-title">mensaje</h3>
	    			<div id="message-box-conact"></div>
	    			<div class="row">
	    				<div class="col-sm-4">

	    					<p>
	    						<input id="name" type="text" placeholder="Nombre*" />
	    					</p>
	    					<p>
	    						<input id="email" type="text" placeholder="E-mail*" />
	    					</p>
	    					<p>
	    						<input id="subject" type="text" placeholder="Asunto*" />
	    					</p>
	    				</div>
	    				<div class="col-sm-8">
	    					<textarea id="content" placeholder="Mensaje" rows="7"></textarea>
	    				</div>
	    				<button id="btn-send-contact" class="button pull-right primary">Enviar Mensaje</button>
	    			</div>
		    	</div>
		    	<div class="col-sm-4">
		    		<h3 class="form-title">Datos de contacto</h3>
		    		<p>
		    			<label><b>Teléfono:</b></label>
		    			4353-0876
		    		</p>
		    		<p>
		    			<label><b>Horario de Atención:</b></label>
		    			Lunes a Viernes de 10 a 18 hs.
		    		</p>
		    	</div>
		    </div>
	    </div>
	</div>
</div>
@endsection
