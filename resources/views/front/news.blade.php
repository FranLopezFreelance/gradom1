@extends('layouts.head-front')

@section('content')
<div class="main-container left-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12 main-content">
				<div class="shop-page-bar">
					<nav class="woocommerce-breadcrumb breadcrumbs">
						<a href="/">Home</a>
						Novedades
					</nav>
					<div class="page-bar-right">
						<!-- <form class="woocommerce-ordering">
							<select name="orderby" class="orderby" style="display: none;">
								<option value="menu_order" selected="selected">Default sorting</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</form> -->
						<!-- <div class="shop-display-mode">
				        <span class="label-filter">View as:</span>
				        <a data-mode="list" class="display-mode" href="#"><i class="fa fa-th-list"></i></a>
				        <a data-mode="grid" class="display-mode active" href="#"><i class="fa fa-th-large"></i></a>
				    </div> -->
					</div>
				</div>
          <ul class="products product-list-grid desktop-columns-4 tablet-columns-2 mobile-columns-1">
    				@forelse($products as $product)
                @include('clients.product-new')
            @empty
              <h2>No hay productos la sección Novedades</h2>
            @endforelse
        </ul>
			</div>
		</div>
	</div>
</div>
@endsection
