@extends('layouts.head-clients')

@section('content')
				</div>
			</div>
		</div>
	</div>
	<div class="main-container left-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 main-content">
					<nav class="woocommerce-breadcrumb breadcrumbs">
						<a href="/orderConfirm/pendingOrders">Pedidos Confirmados</a>
						Listado
					</nav>
					<div class="block-form">
						<table class="shop_table cart">
							<thead>
								<tr>
									<th>Cerrar</th>
									<th>Número</th>
									<th>Cliente</th>
									<th>Fecha</th>
									<th>Productos</th>
									<th>Total</th>
									<th>Cancelar</th>
								</tr>
							</thead>
							<tbody>
								@forelse($orders as $order)
									@include('admin.itemOrder')
								@empty
									<h3>No hay Pedidos pendientes</h3>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
