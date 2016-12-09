@extends('layouts.head-front')

@section('content')
<div class="page-banner bg-parallax"></div>
<div class="main-container no-sidebar">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 main-content">
				<div class="shop-page-bar">
					<nav class="woocommerce-breadcrumb breadcrumbs">
						<a href="/">Home</a>
						@if($section->section_id == 0)
              Productos / {{ $section->name }}
            @else
              Productos / {{ $section->mother->name }} / {{ $section->name }}
            @endif
					</nav>
					<div class="page-bar-right">
						<form class="woocommerce-ordering">
							<select name="orderby" class="orderby" style="display: none;">
								<option value="menu_order" selected="selected">Default sorting</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</form>
						<div class="shop-display-mode">
				            <span class="label-filter">View as:</span>
				            <a data-mode="list" class="display-mode" href="#"><i class="fa fa-th-list"></i></a>
				            <a data-mode="grid" class="display-mode active" href="#"><i class="fa fa-th-large"></i></a>
				        </div>
					</div>
				</div>
				<ul class="products product-list-grid desktop-columns-4 tablet-columns-3 mobile-columns-1">
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/1.jpg" alt="">
									<img class="second-image" src="/images/products/2.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<div class="flash">
									<span class="new">New</span>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/2.jpg" alt="">
									<img class="second-image" src="/images/products/3.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<div class="flash">
									<span class="sale">Sale</span>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price"><ins>$75.00</ins><del>$100.00</del></span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/3.jpg" alt="">
									<img class="second-image" src="/images/products/4.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/4.jpg" alt="">
									<img class="second-image" src="/images/products/5.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/5.jpg" alt="">
									<img class="second-image" src="/images/products/6.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/6.jpg" alt="">
									<img class="second-image" src="/images/products/7.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/7.jpg" alt="">
									<img class="second-image" src="/images/products/8.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/8.jpg" alt="">
									<img class="second-image" src="/images/products/9.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/9.jpg" alt="">
									<img class="second-image" src="/images/products/10.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/10.jpg" alt="">
									<img class="second-image" src="/images/products/11.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/11.jpg" alt="">
									<img class="second-image" src="/images/products/12.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
					<li class="product-item col-md-3 col-sm-4 col-xs-12">
						<div class="product-inner">
							<div class="thumb has-second-image">
								<a href="#">
									<img src="/images/products/12.jpg" alt="">
									<img class="second-image" src="/images/products/1.jpg" alt="">
								</a>
								<div class="group-button">
									<a class="wishlist" href="#">Wishlist</a>
									<a class="button add_to_cart_button" href="#">Add to cart</a>
									<a class="compare button" href="#">Compare</a>
								</div>
								<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
							</div>
							<div class="info">
								<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
								<span class="price">$75.00</span>
							</div>
						</div>
					</li>
				</ul>
				<nav class="woocommerce-pagination navigation">
					<ul class="page-numbers">
						<li><span class="page-numbers current">1</span></li>
						<li><a class="page-numbers" href="#">2</a></li>
						<li><a class="page-numbers" href="#">3</a></li>
						<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
		<div class="row margin-0">
			<div class="col-sm-6 padding-0">
				<div class="block-social">
					<div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
				</div>
			</div>
			<div class="col-sm-6 padding-0">
				<div class="block-newsletter">
					<div class="inner">
						<h2 class="title">Join Our Newsletter</h2>
						<p class="subtitle">Sign up our newsletter and get more events & promotions!</p>
						<form>
							<input type="text" placeholder="Enter your email here" class="text-input">
							<button class="button"><i class="fa fa-envelope-o"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection
