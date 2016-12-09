@extends('layouts.head-clients')

@section('content')
<div class="main-container left-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 main-content">
				<nav class="woocommerce-breadcrumb breadcrumbs">
					<a href="/orderConfirm/pendingOrders">Pedidos COnfirmados</a>
					Pedido N° {{ $order->id }}
				</nav>
				<h3>El Pedido N° {{ $order->id }} fué confirmado!</h3>
				<h5>Puede ver el estado del mismo <a href="/orderConfirm/showConfirm/{{ $order->id }}">aquí</a>.</h5>
				<h5>Muchas Gracias!</h5>
		</div>
	</div>
</div>
@endsection
