<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cosmos</title>
        <meta name="description" content="Responsive eCommerce HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/cosmos-logo.png')); ?>">
		
		<!-- all css here -->
        <link rel="stylesheet" href="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/material-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/fotorama.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/nice-select.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/ionicons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/meanmenu.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/bundle.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
        <script src="<?php echo e(asset('assets/js/vendor/modernizr-2.8.3.min.js')); ?>"></script>
    </head>

    <div class="wrapper">
        	<!-- Start header area -->
            <header class="header-area header-1">
                <div class="header-top">
                    <div class="box-container">
                        <div class="row">
                            <div class="col-12 mobile-menu-area">
                            	<div class="mobile-menu">
	                                <nav id="mobile-menu">
	                                    <ul>
	                                        <li><a href="<?php echo e(url('/dashboard')); ?>">Home</a>
		                                        <!-- <ul>
		                                            <li><a href="index-2.php">Home 2</a></li>
		                                            <li><a href="index-3.php">Home 3</a></li>
		                                            <li><a href="index-4.php">Home 4</a></li>
		                                        </ul> -->
	                                        </li>
	                                        <li><a href="<?php echo e(url('/dashboard/shopping')); ?>">Shop</a>
		                                        <!-- <ul>
													<li><a href="shop-right-sidebar.php">Shop Right Sidebar</a></li>
													<li><a href="shop-list.php">Shop List</a></li>
													<li><a href="product-details.php">Product Details</a></li>
		                                        </ul> -->
	                                        </li>
	                                        <li><a href="blog.php">Blog</a>
		                                        <!-- <ul>
		                                            <li><a href="blog-left-sidebar.php">Left Sidebar</a></li>
		                                            <li><a href="single-blog.php">Single Blog</a></li>
		                                        </ul> -->
	                                        </li>
	                                        <li><a href="contact-us.php">contact</a></li>
	                                        <li><a href="<?php echo e(route('about.index')); ?>">About</a></li>
	                                        <li><a href="">Pages</a>
		                                        <ul>
		                                            <li><a href="<?php echo e(route('account.index')); ?>">My Account</a></li>
		                                            <li><a href="">Login</a></li>
		                                            <li><a href="register.php">Register</a></li>
		                                            <li><a href="<?php echo e(route('wishlist.index')); ?>">Wishlist</a></li>
		                                            <li><a href="<?php echo e(route('cart')); ?>">Cart</a></li>
		                                            <li><a href="<?php echo e(route('checkout.index')); ?>">Checkout</a></li>
		                                            <li><a href="404.php">404 Error</a></li>
		                                            <li><a href="#">Third Level Menu</a>
														<ul>
															<li><a href="#">Third Level Menu</a></li>
															<li><a href="#">Third Level Menu</a></li>
															<li><a href="#">Third Level Menu</a></li>
															<li><a href="#">Third Level Menu</a></li>
														</ul>
		                                            </li>
		                                        </ul>
	                                        </li>
	                                    </ul>
	                                </nav>   
	                            </div>                             	
                            </div>                        
                            
                            <div class="col-12 col-md-12 col-lg-6">
                               
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="header-bottom">
                    <div class="box-container">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-2">
                            	<div class="logo">
                            		<a href="<?php echo e(url('/dashboard')); ?>">
                            			<img src="<?php echo e(asset('images/' . $data['app'][0]->image)); ?>" alt="logo">
                            		</a>
                            	</div>
                            </div>
							<div class="col-12 col-md-6 d-none d-lg-block col-lg-5">
                                <div class="header-top-left-menu ps-5">
                                    <nav>
                                        <ul>
                                            <li><a href="<?php echo e(url('/dashboard')); ?>">Home</a>
		                                        <!-- <ul>
		                                            <li><a href="index-2.php">Home 2</a></li>
		                                            <li><a href="index-3.php">Home 3</a></li>
		                                            <li><a href="index-4.php">Home 4</a></li>
		                                        </ul> -->
                                            </li>
											<li><a href="<?php echo e(route('about.index')); ?>">About</a></li>
                                            <li><a href="<?php echo e(route('shopping.index')); ?>">Shop</a>
		                                        <!-- <ul>
													<li><a href="shop-right-sidebar.php">Shop Right Sidebar</a></li>
													<li><a href="shop-list.php">Shop List</a></li>
													<li><a href="product-details.php">Product Details</a></li>
		                                        </ul> -->
                                            </li>
                                            <!-- <li><a href="blog.php">Blog</a> -->
		                                        <!-- <ul>
		                                            <li><a href="blog-left-sidebar.php">Left Sidebar</a></li>
		                                            <li><a href="single-blog.php">Single Blog</a></li>
		                                        </ul> -->
                                            </li>
                                            <li><a href="<?php echo e(route('contact.index')); ?>">contact</a></li>
                                            
                                            <li><a href="">Pages</a>
		                                        <ul>
		                                            <li><a href="<?php echo e(route('account.index')); ?>">My Account</a></li>
		                                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
		                                            <li><a href="<?php echo e(route('register-user')); ?>">Register</a></li>
		                                            <li><a href="<?php echo e(route('wishlist.index')); ?>">Wishlist</a></li>
		                                            <li><a href="<?php echo e(route('cart')); ?>">Cart</a></li>
		                                            <li><a href="<?php echo e(route('checkout.index')); ?>">Checkout</a></li>
		                                            <li><a href="404.php">404 Error</a></li>
		                                            <li><a href="#">Third Level Menu</a>
														<ul>
															<li><a href="#">Third Level Menu</a></li>
															<li><a href="#">Third Level Menu</a></li>
															<li><a href="#">Third Level Menu</a></li>
															<li><a href="#">Third Level Menu</a></li>
														</ul>
		                                            </li>
		                                        </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-12 col-md-9 col-lg-5 d_f_ac clearfix">
								<div class="header-top-right-menu">
                                    <nav>
                                        <ul>
                                            <!-- <li class="customer-menu"><a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="my-account.php">My Accounts</a></li>
                                                    <li><a href="wishlist.php">WishList</a></li>
                                                    <li><a href="#">Compare Products</a></li>
                                                    <li><a href="cart.php">My Cart</a></li>
                                                    <li><a href="login.php">Sign In</a></li>
                                                </ul>                                                
                                            </li> -->
                                            <!-- <li class="currency-menu"><a href="#">USD <i class="fa fa-angle-down"></i></a> 
                                                <ul>
                                                    <li><a href="#">Gbp</a></li>
                                                    <li><a href="#">Euro</a></li>
                                                </ul>
                                            </li>
                                            <li class="language-menu"><a href="#">English <i class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Danish</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </li> -->
                                        </ul>
                                    </nav>
                                </div>
                            	<!-- <div class="product-category">
									<div class="category-title">
										<h6><i class="material-icons">menu</i>All Categories</h6>
	                            		<nav>
	                            			<ul>
	                            				<li><a href="#">Fashion</a>
													<ul>
														<li><a href="#">Bags</a></li>
														<li><a href="#">Mens</a></li>
														<li><a href="#">Women</a></li>
														<li><a href="#">Shoes</a></li>
													</ul>
	                            				</li>
	                            				<li><a href="#">Jewelry</a>
													<ul>
														<li><a href="#">Bracelets</a></li>
														<li><a href="#">Earrings</a></li>
														<li><a href="#">Necklaces</a></li>
														<li><a href="#">Rings</a></li>
													</ul>
	                            				</li>
	                            				<li><a href="#">Electronics</a>
													<ul>
														<li><a href="#">Cameras</a></li>
														<li><a href="#">Headphone</a></li>
														<li><a href="#">Laptop</a></li>
														<li><a href="#">TV & Audio</a></li>
													</ul>
	                            				</li>
	                            				<li class="extra_menu"><a href="#">furniture</a>
													<ul>
														<li><a href="#">Bed Room</a></li>
														<li><a href="#">Dining room</a></li>
														<li><a href="#">Home office</a></li>
														<li><a href="#">living room</a></li>
													</ul>
	                            				</li>
	                            				<li class="more-cat"><span>More Categories</span></li>
	                            			</ul>
	                            		</nav>										
									</div>                            	
                            	</div> -->
                            	<!-- <div class="product-search">
                            		<form action="#">
                            			<input type="text" placeholder="Search entire store here..." class="input-text">
                            			<input type="submit" value="Search" class="input-text submit-btn">
                            		</form>
                            	</div> -->
                            </div>
                            <!-- <div class="col-12 col-md-3 col-lg-2 d_f_ac d_f_e clearfix">
                            	<div class="header-quick-links">
                            		<ul>
                            			<li><a href="#"><i class="material-icons">autorenew</i></a></li>
                            			<li><a href="wishlist.php"><i class="material-icons">favorite_border</i></a></li>
                            			<li class="cart-tigger"><a href="#"><i class="material-icons">shopping_cart</i><span>3</span></a>
											<div class="mini-cart">
												<div class="mini-cart-inner">
													<span class="minicart-close"><i class="material-icons">clear</i></span>
													<div class="minicart-total-wraper">
														<p><strong>4</strong> Items in Cart</p>
														<b>Cart Subtotal: <span class="minitotal-price">₹552.00</span></b>
														<a href="checkout.php">Proceed to Checkout</a>
													</div>
													<div class="mini-cart-sing-item-wrapper">
														<div class="mini-cart-sing-item">
															<div class="mini-cart-content">
																<img src="assets/img/minicart/minicart1.jpg" alt="mini cart 1">
																<div class="minicart-item-desc">
																	<a href="#">Standard animal</a>
																	<span class="minicart-price">₹99.00</span>
																	<p class="minicart-qty"><span>Qty:</span><input type="number" value="3"></p>
																</div>
															</div>
															<div class="mini-cart-edit-item">
																<a class="item-edit" href="#" title="edit"><i class="material-icons">settings</i></a>
																<a class="item-delete" href="#" title="delete"><i class="material-icons">delete_forever</i></a>
															</div>
														</div>
														<div class="mini-cart-sing-item">
															<div class="mini-cart-content">
																<img src="assets/img/minicart/minicart1.jpg" alt="mini cart 1">
																<div class="minicart-item-desc">
																	<a href="#">Standard animal</a>
																	<span class="minicart-price">₹99.00</span>
																	<p class="minicart-qty"><span>Qty:</span><input type="number" value="3"></p>
																</div>
															</div>
															<div class="mini-cart-edit-item">
																<a class="item-edit" href="#" title="edit"><i class="material-icons">settings</i></a>
																<a class="item-delete" href="#" title="delete"><i class="material-icons">delete_forever</i></a>
															</div>
														</div>
														<div class="mini-cart-sing-item">
															<div class="mini-cart-content">
																<img src="assets/img/minicart/minicart1.jpg" alt="mini cart 1">
																<div class="minicart-item-desc">
																	<a href="#">Standard animal</a>
																	<span class="minicart-price">₹99.00</span>
																	<p class="minicart-qty"><span>Qty:</span><input type="number" value="3"></p>
																</div>
															</div>
															<div class="mini-cart-edit-item">
																<a class="item-edit" href="#" title="edit"><i class="material-icons">settings</i></a>
																<a class="item-delete" href="#" title="delete"><i class="material-icons">delete_forever</i></a>
															</div>
														</div>
													</div>
													<div class="minicart-action-area">
														<a href="cart.php">View and Edit Cart</a>
													</div>
												</div>
											</div>
                            			</li>
                            		</ul>
                            	</div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- End header area -->

 <!-- Start footer area  -->
  <footer class="footer-area">
            	<!-- Start newsletter area  -->
            	<div class="newsletter-area">
	            	<div class="container">
	            		<div class="row">
	            			<div class="col-12 col-sm-12 col-md-6 col-lg-5">
	            				<div class="newsletter">
	            					<h2>Sign up for newsletter</h2>
	            					<p>Get the latest deals and special offers</p>
	            				</div>
	            			</div>
	            			<div class="col-12 col-sm-12 col-md-6 col-lg-7">
	            				<div class="newsletter-form">
	            					<form action="#">
	            						<input type="email" id="email" name="email" class="form-contral" placeholder="Enter your email address" >
	            						<input type="submit" value="Sign Up" class="form-contral" >
	            					</form>
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
	            <!-- End newsletter area  -->
                <?php echo $__env->yieldContent('content'); ?>
	            <!-- Start footer our services area  -->
	            <div class="footer-ourservice">
	            	<div class="container">
	            		<div class="row">
							<div class="col-12 col-sm-6 col-md-3">
								<div class="single-foo-service">
									<div class="single-foo-service-image">
										<img src="<?php echo e(asset('assets/img/service/service_icon1.png')); ?>" alt="service_icon">
									</div>
									<div class="single-foo-service-content">
										<h5>100% SECURE PAYMENTS</h5>
										<p>Moving your card details to a much more secured place</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3">
								<div class="single-foo-service">
									<div class="single-foo-service-image">
										<img src="<?php echo e(asset('assets/img/service/service_icon2.png')); ?>" alt="service_icon">
									</div>
									<div class="single-foo-service-content">
										<h5>TRUSTPAY</h5>
										<p>Moving your card details to a much more secured place</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3">
								<div class="single-foo-service">
									<div class="single-foo-service-image">
										<img src="<?php echo e(asset('assets/img/service/service_icon3.png')); ?>" alt="service_icon">
									</div>
									<div class="single-foo-service-content">
										<h5>HELP CENTER</h5>
										<p>Got a question? Look no further Browse our FAQs.</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3">
								<div class="single-foo-service">
									<div class="single-foo-service-image">
										<img src="<?php echo e(asset('assets/img/service/service_icon4.png')); ?>" alt="service_icon">
									</div>
									<div class="single-foo-service-content">
										<h5>SHOP ON THE GO</h5>
										<p>Download the app and get exciting app only offers at your fingertips</p>
									</div>
								</div>
							</div>
	            		</div>
	            	</div>
	            </div>
	            <!-- End footer our services area  -->
	            <!-- start footer middle -->
	            <div class="footer-middle">
	            	<div class="container">
            			<div class="row">
            				<div class="col-12 col-sm-6 col-md-6 col-lg-4">
	            				<div class="footer-about-us">
	            					<div class="logo-footer">
	            						<a href="index.php">
	            							<img src="<?php echo e(asset('images/' . $data['app'][0]->image)); ?>" alt="footer logo">
	            						</a>
	            					</div>
	            					<div class="footer-content">
	            						<p><?php echo e($data['app'][0]->description); ?></p>
	            						
	            					</div>
	            				</div>            				
            				</div>
							
        					<!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        						<div class="footer-menu">
        							<h4>Customer Service</h4>
        							<ul>
									   
									    <li><a href="#">orders and returns</a></li>
									    <li><a href="#">Privacy Policy</a></li>
									    <li><a href="#">Custom Service</a></li>
									    <li><a href="#">search terms</a></li>
									    <li><a href="#">Delivery Information</a></li>
									    <li><a href="#">Order History</a></li>
        							</ul>
        						</div>
        					</div> -->
        					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
        						<div class="footer-menu">
        							<h4>information</h4>
        							<ul>
									    <li><a href="<?php echo e(route('account.index')); ?>">My Account</a></li>
									    <li><a href="#">Logout</a></li>
									    <li><a href="<?php echo e(url('/cart/add')); ?>">My cart</a></li>
									    <!-- <li><a href="checkout.php">Checkout</a></li> -->
									    <!-- <li><a href="#">Gift Vouchers</a></li> -->
									    <li><a href="login.php">Login</a></li>
        							</ul>
        						</div>
        					</div>
        					<div class="col-12 col-sm-6 col-md-6 col-lg-2">
        						<div class="footer-menu">
        							<h4>Extras</h4>
        							<ul>
									<li><a href="<?php echo e(route('about.index')); ?>">About us</a></li>
									<li><a href="<?php echo e(route('contact.index')); ?>">Contact Us</a></li>
									    <li><a href="<?php echo e(route('wishlist.index')); ?>">Wish List</a></li>
									    <!-- <li><a href="#">compare</a></li> -->
									    <!-- <li><a href="#">Site Map</a></li> -->
									    <!-- <li><a href="#">Advanced Search</a></li> -->
									    <!-- <li><a href="#">FAQ</a></li> -->
									    <!-- <li><a href="#">Warranty</a></li> -->
									    <!-- <li><a href="#">Order status</a></li> -->
        							</ul>
        						</div>
        					</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-3">
	            				<div class="footer-about-us">
									<div class="footer-content-address footer-menu">
									<h4>Contact info</h4>
										<!-- <label> </label> -->
										<ul class="social-icon">
											<li>
												<!--<a href=""><i class="fa fa-mobile" aria-hidden="true"></i> +91 9876543210 </i></a>-->
												<a href=""><i class="fa fa-mobile" aria-hidden="true"></i><?php echo e($data['app'][0]->number); ?></i></a>
											</li> 
											<li>
												<a href=""><i class="fa fa-envelope" aria-hidden="true"></i><?php echo e($data['app'][0]->email); ?></i> </a>
											</li>
											<li>
												<a href=""><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo e($data['app'][0]->address); ?> </i></a>
											</li>
										</ul>
									</div>
									<div class="footer-social">
										<ul>
											<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
											<!-- <li class="rss"><a href="#"><i class="fa fa-rss"></i></a></li> -->
										</ul>
									</div>
								</div>
							</div>
            			</div>
	            	</div>
	            </div>
	            <!-- end footer middle -->
	            <!-- <div class="footer-tag">
	            	<div class="container">
	            		<div class="row">
	            			<div class="col-12">
	            				<div class="footer-tag-list">
	            					<ul>
										<li><a href="#">Online Shopping</a></li>
										<li><a href="#">Promotions</a></li>
										<li><a href="#">My Orders</a></li>
										<li><a href="#">Help</a></li>
										<li><a href="#">Customer</a></li>
										<li><a href="#">Service</a></li>
										<li><a href="#">Support Most</a></li>
										<li><a href="#">Populars</a></li>
										<li><a href="#">New Arrivals</a></li>
										<li><a href="#">Special</a></li>
										<li><a href="#">Products</a></li>
										<li><a href="#">Manufacturers</a></li>
										<li><a href="#">Our Stores</a></li>
										<li><a href="#">Shipping Payments</a></li>
										<li><a href="#">Warantee Refunds</a></li>
										<li><a href="#">Checkout</a></li>
										<li><a href="#">Discount</a></li>
										<li><a href="#">Terms & Conditions</a></li>
										<li><a href="#">Policy</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Payments</a></li>
										<li><a href="#">Returns</a></li>
										<li><a href="#">Refunds</a></li>
	            					</ul>
	            				</div>
	            				<div class="footer-payment-logo">
	            					<img src="assets/img/payment.png" alt="accept payment">
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            </div> -->
	            <div class="footer-copy-right">
	            	<div class="container">
	            		<div class="row">
	            			<div class="col-12">
	            				<div class="copyright-text">
	            					<p>&copy; 2024 Cosmos, Inc. All rights reserved.</p>
	            				</div>
	            			</div>
	            		</div>
	            	</div>
	            </div>
            </footer>
            <!-- End footer area  -->
            <!-- modal -->
            <div class="modal fade" id="productQucikView" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
		                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
		                    <span class="ion-android-close" aria-hidden="true"></span>
		                </button>                      
                        <div class="modal-body">
							<div class="row">
								<div class="col-12 col-sm-6">
									<div class="single-product-image">
										<div class="quickview-fotorama">
											<a href="<?php echo e(asset('assets/img/Jawan-min.png')); ?>">
												<img src="<?php echo e(asset('assets/img/Jawan-min.png')); ?>" alt="product image">
											</a>
											<a href="<?php echo e(asset('assets/img/product/torch2.webp')); ?>">
												<img src="<?php echo e(asset('assets/img/product/torch2.webp')); ?>" alt="product image">
											</a>
											<a href="<?php echo e(asset('assets/img/product/torch5.webp')); ?>">
												<img src="<?php echo e(asset('assets/img/product/torch5.webp')); ?>" alt="product image">
											</a>
											<a href="<?php echo e(asset('assets/img/product/torch7.webp')); ?>">
												<img src="<?php echo e(asset('assets/img/product/torch7.webp')); ?>" alt="product image">
											</a>
											<a href="<?php echo e(asset('assets/img/product/torch9.webp')); ?>">
												<img src="<?php echo e(asset('assets/img/product/torch9.webp')); ?>" alt="product image">
											</a>
											<a href="<?php echo e(asset('assets/img/product/torch10.webp')); ?>">
												<img src="<?php echo e(asset('assets/img/product/torch10.webp')); ?>" alt="product image">
											</a>
										</div>
									</div>							
								</div>
								<div class="col-12 col-sm-6">
									<div class="single-product-description">
										<div class="product-description-content">
											<h4>Jawan</h4>
											<div class="price-box">
												<span class="regular-price">₹90.00</span>
												<span class="sale-price">₹120.00</span>
											</div>
											<div class="product-review">
												<i class="material-icons">grade</i>
												<i class="material-icons">grade</i>
												<i class="material-icons">grade</i>
												<i class="material-icons">grade</i>
												<i class="material-icons">grade</i>
											</div>
											<div class="product-meta">
												<p class="availability">Availability : <span> In stock</span></p>
												<p class="product-sku">SKU : <span> f2</span></p>
											</div>
											<div class="main-content">
												<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum </p>
											</div>
										</div>
										<div class="product-variation">
											<div class="product-quantity">
												<input class="cart-qty-box" type="number" name="qtybutton" value="0">
												<div class="default-button">
													<a href="#">ADD TO CART</a>
												</div>
											</div>
											<div class="product-cart-option">
												<ul>
													<li><a href="#"><i class="material-icons">mail_outline</i> Send to Friend</a></li>
												</ul>
											</div>
										</div>										
									</div>	
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End wrapper -->
        

		<!-- all js here -->
        <script src="<?php echo e(asset('assets/js/vendor/jquery-1.12.4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/fotorama.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/ajax-mail.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/jquery-nice-select-1.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\laragon\www\torch\resources\views/layouts/apps.blade.php ENDPATH**/ ?>