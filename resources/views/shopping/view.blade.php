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
							<li>Shop</li>
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
			<div class="row flex-row-reverse">
				<div class="col-12 col-md-8 col-lg-9">
					<div class="main-content">
						<div class="shop-page-header">
							<div class="shop-page-header-image">
								<a href="shop.php"><img src="{{asset('images/' . $data['banner'][2]->image)}}" alt="one-column1"></a>
							</div>
						</div>
						<div class="shop-page-product-area">
							<div class="shop-page-product-shorting section-title-border">
								<div class="product-shorting-bar">
									<div class="view-mode">
										<ul class="nav" role=tablist>
											<li class="grid-view"> 
												<a class="active" id="product-grid" data-bs-toggle="tab" href="#grid-product" role="tab" aria-controls="product-grid" aria-selected="true">
													<i class="material-icons">toggle view</i>
												</a>
											</li>
											<li class="list-view">
												<a id="product-list" data-bs-toggle="tab" href="#list-product" role="tab" aria-controls="product-list" aria-selected="false">
													<i class="material-icons">toggle view</i>
												</a>
											</li>			                                    
										</ul>
									</div>
									<div class="show-page">
										<span>Show</span>
										<div class="per-page short-select-option">
											<select class="orderby">
												<option value="">3</option>
												<option value="">6</option>
												<option value="">8</option>
												<option value="">12</option>
											</select>													
										</div>									
									</div>
									<div class="short-asc-dsc">
										<a href="#" title="Set Descending Direction"><i class="fa fa-long-arrow-up"></i></a>
									</div>												
									<div class="shoort-by">
										<span>Sort by</span>
										<div class="short-select-option">
											<select>
												<option value="">Position</option>
												<option value="">Name</option>
												<option value="">Price</option>
											</select>												
										</div>
									</div>
								</div>
							</div>
							<div class="tab-content shop-page-product-tab">
								<div id="grid-product" class="tab-pane fade active show" aria-labelledby="product-grid" role="tabpanel">
									<div class="row product-grid-view">
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<span class="sale">-35%</span>
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][0]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][0]->special_price}}</span>
													<span class="sale-price">{{ $data['product'][0]->mrp_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][0]->name}}</a>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][2]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][2]->special_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][2]->name}}</a>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][5]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][5]->special_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][5]->name}}</a>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<span class="sale">-65%</span>
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][1]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][1]->special_price}}</span>
													<span class="sale-price">{{ $data['product'][1]->mrp_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][1]->name}}</a>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][4]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][4]->special_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][4]->name}}</a>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][8]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][8]->special_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][8]->name}}</a>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][7]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][7]->special_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][7]->name}}</a>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<span class="sale">-20%</span>
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][9]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][9]->special_price}}</span>
													<span class="sale-price">{{ $data['product'][9]->mrp_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][9]->name}}</a>
											</div>
										</div>
										<div class="col-12 col-sm-6 col-md-6 col-lg-4 single-grid-product">
											<div class="grid-product-image">
												<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][3]->image)}}" alt="product grid"></a>
												<div class="product-action">
													<a href="#"><i class="material-icons">favorite_border</i></a>
													<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
													<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
												</div>
												<a class="grid-btn" href="{{route('cart')}}">Add to Cart</a>
											</div>
											<div class="grid-product-info">
												<div class="price-box">
													<span class="regular-price">{{ $data['product'][3]->special_price}}</span>
												</div>
												<a href="{{route('products')}}">{{ $data['product'][3]->name}}</a>
											</div>
										</div>						
									</div>
								</div>
								<div id="list-product" class="tab-pane fade" aria-labelledby="product-list" role="tabpanel">
									<div class="product-list-view">
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<span class="sale">-35%</span>
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][0]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][0]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][0]->special_price}}</span>
															<span class="sale-price">{{ $data['product'][0]->mrp_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][0]->description}}</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="#">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][2]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][2]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][2]->special_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][2]->description}}
														</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="{{route('cart')}}">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][5]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][5]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][5]->special_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][5]->description}}</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="{{route('cart')}}">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<span class="sale">-65%</span>
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][1]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][1]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][1]->special_price}}</span>
															<span class="sale-price">{{ $data['product'][1]->mrp_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][1]->description}}

														</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="{{route('cart')}}">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][4]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][4]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][4]->special_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][4]->description}}</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="{{route('cart')}}">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<span class="sale">-65%</span>
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][8]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][8]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][8]->special_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][8]->description}}</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="{{route('cart')}}">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][7]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][7]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][7]->special_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][7]->description}}</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="{{route('cart')}}">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][9]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][9]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][9]->special_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][9]->description}}</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="{{route('cart')}}">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
										<div class="single-list-product">
											<div class="row">
												<div class="col-12 col-sm-6 col-md-6  col-lg-5 col-xl-4">
													<div class="grid-product-image">
														<a href="{{route('products')}}"><img src="{{asset('images/' . $data['product'][3]->image)}}" alt="product grid"></a>
														<div class="product-action">
															<a href="#"><i class="material-icons">favorite_border</i></a>
															<a href="#"><i class="material-icons">autorenew</i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-sm-6 col-md-6  col-lg-7 col-xl-8">
													<div class="list-product-info">
														<a href="{{route('products')}}">{{ $data['product'][3]->name}}</a>
														<div class="price-box">
															<span class="regular-price">{{ $data['product'][3]->special_price}}</span>
														</div>
														<div class="product-review">
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
															<i class="material-icons">grade</i>
														</div>		
														<p>{{ $data['product'][3]->description}}</p>
														<a class="learn-more-btn" href="{{route('products')}}">Learn More</a>	 
														<div class="default-button">
															<a href="{{route('cart')}}">ADD TO CART</a>
														</div>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="pagination-area">
								<ul>
									<li><a href="#"><i class="material-icons">chevron_left</i></a></li>
									<li><span>1</span></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#"><i class="material-icons">chevron_right</i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>            		
				<div class="col-12 col-md-4 col-lg-3">
					<div class="sidebar-area">
						<!-- <div class="single-sidebar sidebar-category">
							<div class="sidebar-menu">
								<div class="section-title">
									<h2>Category</h2>
								</div>
								<ul>
									<li><a href="shop.php">Bags <span>(8)</span></a></li>
									<li><a href="shop.php">Men's <span>(7)</span></a></li>
									<li><a href="shop.php">Women <span>(4)</span></a></li>
									<li><a href="shop.php">Shoes <span>(3)</span></a></li>
								</ul>
							</div>
						</div> -->
						<div class="single-sidebar sidebar-filter">
							<div class="sidebar-menu">
								<div class="section-title section-title-style1 text-start section-title-border">
									<h2>Color</h2>
								</div>  
								<ul>
									<li><a href="shop.php">black <span>(6)</span></a></li>
									<li><a href="shop.php">blue <span>(5)</span></a></li>
									<li><a href="shop.php">red <span>(2)</span></a></li>
									<li><a href="shop.php">green <span>(9)</span></a></li>
								</ul>
							</div>
						</div>
						<!-- <div class="single-sidebar sidebar-filter">
							<div class="sidebar-menu">
								<div class="section-title section-title-style1 text-start section-title-border">
									<h2>Manufacturer</h2>
								</div>  
								<ul>
									<li><a href="shop.php">Adidas <span>(8)</span></a></li>
									<li><a href="shop.php">Nike <span>(4)</span></a></li>
									<li><a href="shop.php">Chanel <span>(9)</span></a></li>
									<li><a href="shop.php">Other <span>(6)</span></a></li>
								</ul>
							</div>
						</div> -->
						<div class="single-sidebar sidebar-filter">
							<div class="sidebar-menu">
								<div class="section-title section-title-style1 text-start section-title-border">
									<h2>Price</h2>
								</div>  
								<ul>
									<li><a href="shop.php">₹1.00 - ₹99.99 <span>(8)</span></a></li>
									<li><a href="shop.php">₹100.00 - ₹199.99 <span>(4)</span></a></li>
									<li><a href="shop.php">₹200.00 - ₹299.99 <span>(6)</span></a></li>
									<li><a href="shop.php">₹300.00 and above <span>(3)</span></a></li>
								</ul>
							</div>
						</div>
						<!-- <div class="single-sidebar sidebar-bestseller">
							<div class="section-title section-title-style1 text-start section-title-border">
								<h2>bestseller</h2>
							</div>              			
							<div class="sidebar-product-wrapper">
								<div class="best-seller sidebar-product-inner">
									<div class="single-sidebar-product">
										<div class="single-sidebar-image">
											<a href="{{route('products')}}"><img src="assets/img/product/sidebar/sidebar_product1.jpg" alt="product"></a>
										</div>
										<div class="sidebar-main-content">
											<div class="price-box">
												<span class="regular-price">₹130.00</span>
												<span class="sale-price">₹220.00</span>
											</div>
											<a href="{{route('products')}}">Raftar</a>			
										</div>
									</div>
									<div class="single-sidebar-product">
										<div class="single-sidebar-image">
											<a href="{{route('products')}}"><img src="assets/img/product/sidebar/sidebar_product2.jpg" alt="product"></a>
										</div>
										<div class="sidebar-main-content">
											<div class="price-box">
												<span class="regular-price">₹130.00</span>
											</div>
											<a href="{{route('products')}}">Dummy product</a>			
										</div>
									</div>
									<div class="single-sidebar-product">
										<div class="single-sidebar-image">
											<a href="{{route('products')}}"><img src="assets/img/product/sidebar/sidebar_product3.jpg" alt="product"></a>
										</div>
										<div class="sidebar-main-content">
											<div class="price-box">
												<span class="regular-price">₹230.00</span>
												<span class="sale-price">₹200.00</span>
											</div>
											<a href="{{route('products')}}">Specimen animal</a>			
										</div>
									</div>
									<div class="single-sidebar-product">
										<div class="single-sidebar-image">
											<a href="{{route('products')}}"><img src="assets/img/product/sidebar/sidebar_product4.jpg" alt="product"></a>
										</div>
										<div class="sidebar-main-content">
											<div class="price-box">
												<span class="regular-price">₹400.00</span>
											</div>
											<a href="{{route('products')}}">Bakkas course Korbo</a>			
										</div>
									</div>
									<div class="single-sidebar-product">
										<div class="single-sidebar-image">
											<a href="{{route('products')}}"><img src="assets/img/product/sidebar/sidebar_product5.jpg" alt="product"></a>
										</div>
										<div class="sidebar-main-content">
											<div class="price-box">
												<span class="regular-price">₹350.00</span>
												<span class="sale-price">₹220.00</span>
											</div>
											<a href="{{route('products')}}">Simply electronic</a>			
										</div>
									</div>
									<div class="single-sidebar-product">
										<div class="single-sidebar-image">
											<a href="{{route('products')}}"><img src="assets/img/product/sidebar/sidebar_product6.jpg" alt="product"></a>
										</div>
										<div class="sidebar-main-content">
											<div class="price-box">
												<span class="regular-price">₹130.00</span>
											</div>
											<a href="{{route('products')}}">SIR JOHN</a>			
										</div>
									</div>
								</div>
							</div>  
						</div>								 -->
					</div>
				</div>

			</div>
		</div>
	</section>			
	<!-- End Maincontent  -->

@endsection
           