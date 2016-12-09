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
	<link rel="stylesheet" type="text/css" href="/css/others.css">
	<link rel="stylesheet" type="text/css" href="/css/color.css">
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
						<a href="/"><img height="70px" src="/images/logos/1.jpg" alt=""></a>
					</div>
					<div class="form-search-wapper">
						<form class="form-search">
							<input class="input" type="text" placeholder="Search entire store here...">
							<button class="btn-search"><span class="flaticon-magnifying-glass34"></span></button>
						</form>
					</div>
				</div>
				<div class="top-bar-right">
					<ul class="kt-nav top-bar-menu">
						<li class="menu-item-has-children">
							@if(Auth::guest())
								<a href="/login"><span class="menu-icon glyphicon glyphicon-user"> Acceso Mayoristas</span></a>
							@else
								<a href="/login"><span class="menu-icon glyphicon glyphicon-user"> {{ Auth::user()->name }}</span></a>
								<ul class="sub-menu">
									@if(Auth::user()->usertype_id == 1)
										<li><a href="/order/newOrder/1"><span class="glyphicon glyphicon-paste"></span> Nuevo Pedido</a></li>
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

	<!-- ./Header -->

  @yield('content')

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
  	<script type="text/javascript" src="/js/others.js"></script>
</body>
</html>
