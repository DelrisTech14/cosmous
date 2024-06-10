@extends('layouts.apps')
@section('content')
<!-- Start Breadcrumb  -->
<div class="breadcrump-area">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12">
				<div class="korando-breadcrump">
					<ul>
						<li><a href="index.php" title="Go to Home Page">Home</a></li>
						<li>Wishlist</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Start Breadcrumb  -->

<!-- Start Maincontent  -->
<section class="main-content-area">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12">
				<div class="section-title section-title-style1 text-start">
					<h2>My wishlist on Korando</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12">
				<!-- cart table start -->
				<div class="korando-table-area">
					<div class="wishlist-table cart-table table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="width-1">Remove</th>
									<th class="width-2">Images</th>
									<th class="width-3">Product Name</th>
									<th class="width-6">Unit Price</th>
									<th class="width-7">Stock Status</th>
									<th class="width-8">Add to cart</th>
								</tr>
							</thead>
							<tbody>
								<tr class="carttr_1">
									<td>
										<div class="cartpage-item-remove">
											<a href="#" title="Remove"><i class="material-icons">clear</i></a>
										</div>
									</td>
									<td>
										<div class="cartpage-image">
											<a href="{{route('product.index')}}"><img src="{{asset('assets/img/Raftaar-min.png')}}" alt="Raftaar-min" /></a>
										</div>
									</td>
									<td>
										<div class="cartpage-pro-dec">
											<p><a href="{{route('product.index')}}">Raftaar</a></p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<p>₹110.00</p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<span class="success">In Stock</span>
										</div>
									</td>
									<td>
										<div class="primary-btn default-button">
											<a href="{{route('cart.index')}}">Add To Cart</a>
										</div>
									</td>
								</tr>
								<tr class="carttr_2">
									<td>
										<div class="cartpage-item-remove">
											<a href="#" title="Remove"><i class="material-icons">clear</i></a>
										</div>
									</td>
									<td>
										<div class="cartpage-image">
											<a href="{{route('product.index')}}"><img src="{{asset('assets/img/Pratap-min.png')}}" alt="Pratap-min" /></a>
										</div>
									</td>
									<td>
										<div class="cartpage-pro-dec">
											<p><a href="{{route('product.index')}}">Pratap</a></p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<p>₹90.00</p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<span class="danger">Out Of Stock</span>
										</div>
									</td>
									<td>
										<div class="primary-btn default-button">
											<a href="{{route('cart.index')}}">Add To Cart</a>
										</div>
									</td>
								</tr>
								<tr class="carttr_3">
									<td>
										<div class="cartpage-item-remove">
											<a href="#" title="Remove"><i class="material-icons">clear</i></a>
										</div>
									</td>
									<td>
										<div class="cartpage-image">
											<a href="{{route('product.index')}}"><img src="{{asset('assets/img/Jawan-min.png')}}" alt="Jawan-min" /></a>
										</div>
									</td>
									<td>
										<div class="cartpage-pro-dec">
											<p><a href="{{route('product.index')}}">Jawan</a></p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<p>₹125.00</p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<span class="success">In Stock</span>
										</div>
									</td>
									<td>
										<div class="primary-btn default-button">
											<a href="{{route('cart.index')}}">Add To Cart</a>
										</div>
									</td>
								</tr>
								<tr class="carttr_4">
									<td>
										<div class="cartpage-item-remove">
											<a href="#" title="Remove"><i class="material-icons">clear</i></a>
										</div>
									</td>
									<td>
										<div class="cartpage-image">
											<a href="{{route('product.index')}}"><img src="{{asset('assets/img/Veer-min.png')}}" alt="Veer-min" /></a>
										</div>
									</td>
									<td>
										<div class="cartpage-pro-dec">
											<p><a href="{{route('product.index')}}">Veer</a></p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<p>₹250.00</p>
										</div>
									</td>
									<td>
										<div class="cart-pro-price">
											<span class="danger">Out Of Stock</span>
										</div>
									</td>
									<td>
										<div class="primary-btn default-button">
											<a href="{{route('cart.index')}}">Add To Cart</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="share-product cartpage-button">
						<h6>Share On:</h6>
						<ul>
							<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- cart table end -->
			</div>
		</div>
	</div>
</section>
<!-- End Maincontent  -->
<style>
	.cartpage-image a img {
    width: 100px;
    height: 100px;
    object-fit: contain;
    background: #fafafa;
}
</style>
@endsection