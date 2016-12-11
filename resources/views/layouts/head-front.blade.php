<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Gradom</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="/css/chosen.css">
	<link rel="stylesheet" type="text/css" href="/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" type="text/css" href="/css/easyzoom.css">
	<link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,400italic,300italic,300,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/color.css">
	<link rel="stylesheet" type="text/css" href="/css/others.css">
</head>
<body class="home">
<div id="box-mobile-menu" class="full-height full-width box-mobile-menu">
	<div class="box-inner">
		<a href="#" class="close-menu"><span class="icon fa fa-times"></span></a>
	</div>
</div>
<div id="header-ontop" class="is-sticky"></div>
	<!-- Header -->
	<div id="header" class="header">
		<div class="top-bar">
			<div class="container">
				<div class="top-bar-left">
					<div class="logo">
						<a href="/"><img height="120px" src="/images/logos/1.jpg" alt=""></a>
					</div>
					<div class="form-search-wapper">
						<!-- <form class="form-search">
							<input class="input" type="text" placeholder="Buscar...">
							<button class="btn-search"><span class="flaticon-magnifying-glass34"></span></button>
						</form> -->
					</div>
				</div>
				<div class="top-bar-right">
					<ul class="kt-nav top-bar-menu">
						<li class="menu-item-has-children">
							@if(Auth::guest())
								<a href="/login"><span class="menu-icon glyphicon glyphicon-user"> Acceso Mayoristas</span></a>
							@else
								<a href="/"><span class="menu-icon glyphicon glyphicon-user"> {{ Auth::user()->name }}</span></a>
								<ul class="sub-menu">
									@if(Auth::user()->usertype_id == 1)
										<li><a href="/order/newOrder/1"><span class="glyphicon glyphicon-paste"></span> Nuevo Pedido</a></li>
									@else
										<li><a href="/backend/products/1"><span class="glyphicon glyphicon-user"></span> Administrar</a></li>
									@endif
									<li><a href="/orderConfirm/pendingOrders"><span class="glyphicon glyphicon-book"></span> Pendientes</a></li>
									<li><a href="/orderConfirm/deliveredOrders"><span class="glyphicon glyphicon-saved"></span> Entregados</a></li>
									<li><a href="{{ url('/logout') }}"
											onclick="event.preventDefault();
															 document.getElementById('logout-form').submit();">
											<span class="glyphicon glyphicon-logout"></span> Salir
									</a></li>
									<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
									</form>
								</ul>
							@endif
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-header">
			<div class="container">
				<div class="main-menu-wapper">
					<a class="mobile-navigation" href="#">
						<span class="icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
						Main Menu
					</a>
					<ul class="kt-nav main-menu clone-main-menu">
						<li><a href="/">Home</a></li>
            <li><a href="/about">Quienes Somos</a></li>
						@include('front.sections-bar')
						<!-- <li><a href="/news">Novedades</a></li> -->
						<li><a href="/news">Novedades</a></li>
						<li><a href="/contact">Contacto</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- ./Header -->

  @yield('content')

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="widget">
            <h3 class="widget-title">SECCIONES</h3>
            <ul>
              <li><a href="#">HOME</a></li>
	              <li><a href="#">QUIENES SOMOS</a></li>
              <li><a href="#">NOVEDADES</a></li>
              <li><a href="#">CONTACTO</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="widget">
            <h3 class="widget-title">MI CUENTA</h3>
            <ul>
							@if(Auth::guest())
								<li><a href="/login">Acceso Mayoristas</span></a></li>
							@else
									@if(Auth::user()->usertype_id == 1)
										<li><a href="/order/newOrder/1">Nuevo Pedido</a></li>
									@else
										<li><a href="/backend/products/1">Administrar</a></li>
									@endif
								<li><a href="/orderConfirm/pendingOrders">Pendientes</a></li>
								<li><a href="/orderConfirm/deliveredOrders">Entregados</a></li>
							@endif
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="widget widget_instagram">
            <h3 class="widget-title">INSTAGRAM</h3>
            <div class="list-image">
              <div class="item"><a href="#"><img src="/images/instagrams/1.png" alt=""></a></div>
              <div class="item"><a href="#"><img src="/images/instagrams/2.png" alt=""></a></div>
              <div class="item"><a href="#"><img src="/images/instagrams/3.png" alt=""></a></div>
              <div class="item"><a href="#"><img src="/images/instagrams/4.png" alt=""></a></div>
              <div class="item"><a href="#"><img src="/images/instagrams/5.png" alt=""></a></div>
              <div class="item"><a href="#"><img src="/images/instagrams/6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="coppyright">GRADOM - {{ date('Y') }}. Todos los derechos reservados.</div>
          </div>
          <div class="col-sm-12 col-md-6">
            <!-- <div class="payment">
              <span><img src="/images/payments/1.png" alt=""></span>
              <span><img src="/images/payments/2.png" alt=""></span>
              <span><img src="/images/payments/3.png" alt=""></span>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a href="#" class="scroll_top" title="Scroll to Top"><i class="fa fa-arrow-up"></i></a>
  <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="/js/Modernizr.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="/js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="/js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/easyzoom.js"></script>
    <script type="text/javascript" src="/js/masonry.js"></script>
  <script type="text/javascript" src="/js/functions.js"></script>
</body>
</html>
