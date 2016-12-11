@extends('layouts.head-clients')

@section('content')
					<ul class="kt-nav main-menu clone-main-menu">
						<li>
							<h3>Total: $ <span class="totalOrderNav_{{ $order->id }}">{{ $order->total() }}</span>
								<a class="btn btn-warning btn-sm view-order" href="/order/newOrder/1">Volver al Pedido</a>
							</h3>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="main-container left-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 main-content">
					<nav class="woocommerce-breadcrumb breadcrumbs">
						<a href="/">Home</a>
						Pedido
					</nav>
					<div class="block-form">
						<table class="shop_table cart">
							<thead>
								<tr>
									<th class="product">Productos</th>
									<th>Cantidad</th>
									<th>Sub Total</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								@forelse($order->items as $item)
									@include('clients.item')
								@empty
									<h3>No hay productos agregados</h3>
								@endforelse
								<tr>
									<td colspan="3"></td>
									<!-- <td colspan="2" class="order-total">Total: $ <span class="totalOrder_{{ $order->id }}">{{ $order->total() }}</span></td> -->
								</tr>
							</tbody>
						</table>
						<div class="block-form-footer">
							@if($order->products() > 0)
								<a href="/order/confirm/{{ $order->id }}">Confirmar</a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
