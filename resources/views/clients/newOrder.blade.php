@extends('layouts.head-clients')

@section('content')
				<ul class="kt-nav main-menu clone-main-menu">
					<li>
						<h3>Total: $ <span class="totalOrderNav_{{ $order->id }}">{{ $order->total() }}</span>
						<a class="btn btn-warning btn-sm view-order" href="/order/show/{{ $order->id }}">Ver Orden </a>
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
			<div class="col-sm-8 col-md-10 main-content">
				<div class="shop-page-bar">
					<nav class="woocommerce-breadcrumb breadcrumbs">
						<a href="#">Área Clientes</a>
						Nuevo Pedido (N°: {{ $order->id }})
					</nav>
					<div class="page-bar-right">
							<select>
								<option value="menu_order" selected="selected">Elegir color...</option>
									@foreach($colors as $color)
										<option value="{{ $color->id }}">{{ $color->name }}</option>
									@endforeach
							</select>
							<select>
 							 <option value="menu_order" selected="selected">Elegir aumento...</option>
 								 @foreach($increases as $increase)
 									 <option value="{{ $increase->id }}">{{ $increase->name }}</option>
 								 @endforeach
 						 </select>
					</div>
				</div>
          <ul class="products product-list-grid desktop-columns-4 tablet-columns-2 mobile-columns-1">
    				@forelse($section->products as $product)
                @include('clients.product-order')
            @empty
              <h2>No hay productos en esta sección</h2>
            @endforelse
        </ul>
			</div>
			<div class="col-sm-4 col-md-2 sidebar">
				<div class="widget widget_product_categories">
					<hr />
					<h4>SECCIONES</h4>
					<ul class="product-categories">
            @forelse($sections as $navSection)
							@include('clients.section')
            @empty
              <h4>No hay secciones en la base</h4>
            @endforelse
					</ul>
				</div>
				<!-- Filter price -->
                <!-- <div class="widget widget_price_filter">
                    <h2 class="widget-title">Filter by price</h2>
                    <div class="price_slider_wrapper">
                    	<div class="amount-range-price">Price: <span>$50</span> - <span>$350</span></div>
                        <div data-label-reasult="Price:" data-min="0" data-max="500" data-unit="$" class="slider-range-price " data-value-min="50" data-value-max="350"></div>
                	</div>
                </div> -->
                <!-- ./Filter price -->
				<!-- <div class="widget widget_layered_nav">
					<h2 class="widget-title">BY COLORS</h2>
					<ul>
						<li><span style="background-color: #1e73be;" class="attr"></span><a href="#">Blue</a><span class="count">(12)</span></li>
						<li><span style="background-color: #c0c0c0;" class="attr"></span><a href="#">Gray</a><span class="count">(56)</span></li>
						<li><span style="background-color: #966f27;" class="attr"></span><a href="#">Brown</a><span class="count">(32)</span></li>
						<li><span style="background-color: #71c754;" class="attr"></span><a href="#">Green</a><span class="count">(17)</span></li>
						<li><span style="background-color: #10cc22;" class="attr"></span><a href="#">Blue</a><span class="count">(34)</span></li>
						<li><span style="background-color: #dc9814;" class="attr"></span><a href="#">Orange</a><span class="count">(28)</span></li>
						<li><span style="background-color: #141414;" class="attr"></span><a href="#">Black</a><span class="count">(11)</span></li>
					</ul>
				</div> -->
				<!-- <div class="widget widget_layered_nav">
					<h2 class="widget-title">SIZE OPTIONS</h2>
					<ul>
						<li><a href="#">All</a></li>
						<li><a href="#">10 - 100mm</a></li>
						<li><a href="#">100 - 250mm</a></li>
						<li><a href="#">250 - 500mm</a></li>
						<li><a href="#">250mm- 01m</a></li>
						<li><a href="#">01 - 10m</a></li>
					</ul>
				</div> -->
			</div>
		</div>
	</div>
</div>
@endsection
