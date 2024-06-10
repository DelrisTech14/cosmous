
<?php $__env->startSection('content'); ?>
            <!-- Start Slider area -->
            <section class="slider-area">
				<div class="slider-active owl-carousel">
				  <div class="single-slide" style="background-image:url('');"> 
				  <img src="<?php echo e(asset('assets/img/slider/Banner-1.jpg')); ?>" alt="">
					<div class="container">
						<div class="row">
							<div class="col-sm-10 col-md-8 col-lg-6">
								<div class="slider-content">
								<?php if(!empty($banners)): ?>
    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<h2>
										<span class="secondry-color"><?php echo e(isset($banner->title) ? $banner->title : ''); ?></span>
										<strong><?php echo e($banner->description); ?> <br> <?php echo e($banner->description); ?></strong>
									</h2>
									<h4>
										<span class="secondry-color"><?php echo e($banner->description); ?></span>  <?php echo e($banner->description); ?><span class="secondry-color"> <?php echo e($banner->description); ?> </span> <br>  <?php echo e($banner->description); ?>

									</h4>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p>No banners available</p>
<?php endif; ?>
									<!--<h2>
										<span class="secondry-color">monster</span>
										<strong>performance <br> for less</strong>
									</h2>
									<h4>
										<span class="secondry-color">better</span>  build, clear<span class="secondry-color"> Light </span> <br>  & crystal clear 
									</h4>-->
									<div class="slider-button default-button">
										<a href="<?php echo e(route('shopping.index')); ?>">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
				  <div class="single-slide" style="background-image:url('');">
				  <img src="<?php echo e(asset('assets/img/slider/Banner-2.jpg')); ?>" alt="">
					<div class="container">
						<div class="row">
							<div class="col-sm-10 col-md-8 col-lg-6">
								<div class="slider-content">
									<h2>
										<strong>Cosmos Torch</strong>
										<span></span>
									</h2>
									<h3>
										flat 50% <span class="secondry-color"> off </span>
									</h3>
									<div class="slider-button default-button">
										<a href="shop.php">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				  </div>
				</div>            	
            </section>
			
            <!-- End Slider area -->
            <!-- Start store policy  -->
            <section class="store-policy-method">
            	<div class="container ">
            		<div class="store-policy-method-wrapper wrap-border">
	            		<div class="row">
	            			<div class="col-12 col-sm-6 col-lg-3">
	            				<div class="single-method-box">
	            					<i class="material-icons">local_shipping</i>
	            					<div class="method-content">
										<h5>Free Delivery</h5>
										<p>On orders of ₹200+</p>
									</div>
	            				</div>
	            			</div>
	            			<div class="col-12 col-sm-6 col-lg-3">
	            				<div class="single-method-box">
	            					<i class="material-icons">credit_card</i>
	            					<div class="method-content">
										<h5>Cod</h5>
										<p>Cash on Delivery</p>
									</div>
	            				</div>
	            			</div>
	            			<div class="col-12 col-sm-6 col-lg-3">
	            				<div class="single-method-box">
	            					<i class="material-icons">card_giftcard</i>
	            					<div class="method-content">
										<h5>Free Gift Box</h5>
										<p>Buy a Gift</p>
									</div>
	            				</div>
	            			</div>
	            			<div class="col-12 col-sm-6 col-lg-3">
	            				<div class="single-method-box">
	            					<i class="material-icons">ring_volume</i>
	            					<div class="method-content">
										<h5>Free Support 24/7</h5>
										<p>Online 24hrs a Day</p>
									</div>
	            				</div>
	            			</div>
	            		</div>
            		</div>
            	</div>
            </section>
            <!-- End store policy  -->

            <!-- Start shop by category  -->
            <!-- <section class="shop-by-category">
            	<div class="container ">
            		<div class="section-title section-title-style1 text-start">
            			<h2>Shop by categories</h2>
            		</div>

            		 <div class="wrap-border">
						<div class="row">
	            			<div class="col-12 col-sm-12 col-md-12 col-lg-12">

								<div class="owl-slider">
									<div id="carousel" class="owl-carousel">
										<div class="item">
											<div class="single-shop-by-category">
												<div class="shop-by-cat-images">
													<a href="shop.php"><img src="assets/img/category/cat5.jpg" alt="cate_thumb3"></a>
												</div>
												<div class="shop-by-cat-content">
													<h3>Fashion</h3>
													<ul>
														<li><a href="shop.php">Bags</a></li>
														<li><a href="shop.php">Men's</a></li>
														<li><a href="shop.php">Women</a></li>
														<li><a href="shop.php">Shoes</a></li>
														<li><a href="shop.php">See more</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-shop-by-category">
												<div class="shop-by-cat-images">
													<a href="shop.php"><img src="assets/img/category/cat6.jpg" alt="cate_thumb3"></a>
												</div>
												<div class="shop-by-cat-content">
													<h3>Jewelry</h3>
													<ul>
														<li><a href="shop.php">Bracelets</a></li>
														<li><a href="shop.php">Earrings</a></li>
														<li><a href="shop.php">Necklaces</a></li>
														<li><a href="shop.php">Rings</a></li>
														<li><a href="shop.php">See more</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-shop-by-category">
												<div class="shop-by-cat-images">
													<a href="shop.php"><img src="assets/img/category/cate_thumb3.jpg" alt="cate_thumb3"></a>
												</div>
												<div class="shop-by-cat-content">
													<h3>Electronics</h3>
													<ul>
														<li><a href="shop.php">Cameras</a></li>
														<li><a href="shop.php">Headphone</a></li>
														<li><a href="shop.php">Laptop</a></li>
														<li><a href="shop.php">TV & Audio</a></li>
														<li><a href="shop.php">See more</a></li>										
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-shop-by-category">
												<div class="shop-by-cat-images">
													<a href="shop.php"><img src="assets/img/category/cat8.jpg" alt="cate_thumb3"></a>
												</div>
												<div class="shop-by-cat-content">
													<h3>furniture</h3>
													<ul>
														<li><a href="shop.php">Bed Room</a></li>
														<li><a href="shop.php">Dining room</a></li>
														<li><a href="shop.php">Home office</a></li>
														<li><a href="shop.php">living room</a></li>
														<li><a href="shop.php">See more</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-shop-by-category">
												<div class="shop-by-cat-images">
													<a href="shop.php"><img src="assets/img/category/cat8.jpg" alt="cate_thumb3"></a>
												</div>
												<div class="shop-by-cat-content">
													<h3>furniture</h3>
													<ul>
														<li><a href="shop.php">Bed Room</a></li>
														<li><a href="shop.php">Dining room</a></li>
														<li><a href="shop.php">Home office</a></li>
														<li><a href="shop.php">living room</a></li>
														<li><a href="shop.php">See more</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
	            			</div>
	            			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
	            				<div class="single-shop-by-category">
	            					<div class="shop-by-cat-images">
	            						<a href="shop.php"><img src="assets/img/category/cat6.jpg" alt="cate_thumb3"></a>
	            					</div>
	            					<div class="shop-by-cat-content">
	            						<h3>Jewelry</h3>
	            						<ul>
											<li><a href="shop.php">Bracelets</a></li>
											<li><a href="shop.php">Earrings</a></li>
											<li><a href="shop.php">Necklaces</a></li>
											<li><a href="shop.php">Rings</a></li>
											<li><a href="shop.php">See more</a></li>
	            						</ul>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
	            				<div class="single-shop-by-category">
	            					<div class="shop-by-cat-images">
	            						<a href="shop.php"><img src="assets/img/category/cate_thumb3.jpg" alt="cate_thumb3"></a>
	            					</div>
	            					<div class="shop-by-cat-content">
	            						<h3>Electronics</h3>
	            						<ul>
											<li><a href="shop.php">Cameras</a></li>
											<li><a href="shop.php">Headphone</a></li>
											<li><a href="shop.php">Laptop</a></li>
											<li><a href="shop.php">TV & Audio</a></li>
											<li><a href="shop.php">See more</a></li>										
	            						</ul>
	            					</div>
	            				</div>
	            			</div>
	            			<div class="col-12 col-sm-6 col-md-6 col-lg-3">
	            				<div class="single-shop-by-category">
	            					<div class="shop-by-cat-images">
	            						<a href="shop.php"><img src="assets/img/category/cat8.jpg" alt="cate_thumb3"></a>
	            					</div>
	            					<div class="shop-by-cat-content">
	            						<h3>furniture</h3>
	            						<ul>
											<li><a href="shop.php">Bed Room</a></li>
											<li><a href="shop.php">Dining room</a></li>
											<li><a href="shop.php">Home office</a></li>
											<li><a href="shop.php">living room</a></li>
											<li><a href="shop.php">See more</a></li>
	            						</ul>
	            					</div>
	            				</div>
	            			</div>
						</div>
            		</div>

            	</div>
            </section> -->
            <!-- End shop by category  -->
            <!-- Start three column banner  -->
            <!-- <div class="three-column-banner-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-4">
            				<div class="banner-add single-three-column-banner">
            					<a href="shop.php"><img src="assets/img/banner/three-column1.jpg" alt="three-column1"></a>
            				</div>
            			</div>
            			<div class="col-12 col-sm-4">
            				<div class="banner-add single-three-column-banner">
            					<a href="shop.php"><img src="assets/img/banner/three-column2.jpg" alt="three-column1"></a>
            				</div>
            			</div>
            			<div class="col-12 col-sm-4">
            				<div class="banner-add single-three-column-banner">
            					<a href="shop.php"><img src="assets/img/banner/three-column3.jpg" alt="three-column1"></a>
            				</div>
            			</div>
            		</div>
            	</div>
            </div> -->
            <!-- End shop by category  -->
            <!-- Start hot deal area  -->
            <section class="hot-deal">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-md-12 col-lg-12 col-xl-12">
							<div class="section-title section-title-style1 section-title-border">
		            			<h2>Hot Deals</h2>
		            		</div>            			
            				<div class="hot-deal-product-wrapper">
            					<div class="hot-deal-product-inner">
            						<div class="hot-deal-slider slider-contral2 owl-carousel">
            							<div class="hot-deal-single-item">
            								<div class="hot-deal-image">
            									<a href="<?php echo e(route('product.index')); ?>">
													<img src="<?php echo e(asset('assets/img/Tractor-min.png')); ?>" alt="product">
												</a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            								</div>
            								<div class="hot-deal-content">
            									<h3><a href="<?php echo e(route('product.index')); ?>">TRACTOR</a></h3>
            									<div class="hot-price">
            										<span class="regular-price">₹1170.00</span>
            										<span class="sale-price">₹1500.00</span>
            									</div>
            									<div class="product-review">
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            									</div>
            									<p>Illuminate your surroundings with the 100 Watt* Hi-Power Focus Torch Light, equipped with advanced features for superior performance. Designed with 18 Chip COB technology, this torch provides efficient lighting along with a convenient Night Lamp function. Powered by a robust 4 Volt Heavy SMF Lead Acid Battery*, it ensures long-lasting usage. </p>
												<div class="sale-end-time">
													<div data-countdown="2024/12/05"></div>
												</div>  
												<div class="default-button">
													<a href="<?php echo e(url('/dashboard/cart')); ?>">ADD TO CART</a>
												</div>
            								</div>
            							</div>
            							<div class="hot-deal-single-item">
            								<div class="hot-deal-image">
            									<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Sir John-min.png')); ?>" alt="product"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            								</div>
            								<div class="hot-deal-content">
            									<h3><a href="<?php echo e(route('product.index')); ?>">SIR JOHN</a></h3>
            									<div class="hot-price">
            										<span class="regular-price">₹650.00</span>
            										<span class="sale-price">₹800.00</span>
            									</div>
            									<div class="product-review">
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            									</div>
            									<p>Introducing the SIR JOHN Rechargeable Torch/Lamp, an innovative lighting solution designed to meet your diverse needs. Equipped with a Double Switch system, this torch offers versatile functionality for various situations.</p>
												<div class="sale-end-time">
													<div data-countdown="2024/12/05"></div>
												</div>  
												<div class="default-button">
													<a href="<?php echo e(url('/dashboard/cart')); ?>">ADD TO CART</a>
												</div>
            								</div>
            							</div>
            							<div class="hot-deal-single-item">
            								<div class="hot-deal-image">
            									<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Sartaj-min.png')); ?>" alt="product"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            								</div>
            								<div class="hot-deal-content">
            									<h3><a href="<?php echo e(route('product.index')); ?>">SIRTAJ</a></h3>
            									<div class="hot-price">
            										<span class="regular-price">₹150.00</span>
            										<span class="sale-price">₹450.00</span>
            									</div>
            									<div class="product-review">
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            										<i class="material-icons">grade</i>
            									</div>
            									<p>Elevate your lighting experience with the Sartaj Rechargeable Torch/Lamp, crafted to provide exceptional brightness and convenience. Designed for easy and comfortable carrying, this torch ensures you have reliable illumination wherever you go.</p>
												<div class="sale-end-time">
													<div data-countdown="2024/12/05"></div>
												</div>  
												<div class="default-button">
													<a href="<?php echo e(url('/dashboard/cart')); ?>">ADD TO CART</a>
												</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<!-- <div class="col-12 col-md-5 col-lg-4 col-xl-3">
							<div class="section-title section-title-style1 text-start section-title-border">
		            			<h2>bestseller</h2>
		            		</div>              			
            				<div class="sidebar-product-wrapper">
            					<div class="best-seller sidebar-product-inner">
            						<div class="single-sidebar-product">
        								<div class="single-sidebar-image">
        									<a href="<?php echo e(route('product.index')); ?>">
												<img src="assets/img/product/torch2.jpg" alt="product">
											</a>
        								</div>
        								<div class="sidebar-main-content">
        									<div class="price-box">
        										<span class="regular-price">₹130.00</span>
        										<span class="sale-price">₹220.00</span>
        									</div>
        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>			
            							</div>
            						</div>
            						<div class="single-sidebar-product">
        								<div class="single-sidebar-image">
        									<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch3.jpg" alt="product"></a>
        								</div>
        								<div class="sidebar-main-content">
        									<div class="price-box">
        										<span class="regular-price">₹350.00</span>
        									</div>
        									<a href="<?php echo e(route('product.index')); ?>">Specimen animal</a>			
            							</div>
            						</div>
            						<div class="single-sidebar-product">
        								<div class="single-sidebar-image">
        									<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch4.jpg" alt="product"></a>
        								</div>
        								<div class="sidebar-main-content">
        									<div class="price-box">
        										<span class="regular-price">₹220.00</span>
        									</div>
        									<a href="<?php echo e(route('product.index')); ?>">Bakkas course Korbo</a>			
            							</div>
            						</div>
            						<div class="single-sidebar-product">
        								<div class="single-sidebar-image">
        									<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch5.jpg" alt="product"></a>
        								</div>
        								<div class="sidebar-main-content">
        									<div class="price-box">
        										<span class="regular-price">₹130.00</span>
        										<span class="sale-price">₹220.00</span>
        									</div>
        									<a href="<?php echo e(route('product.index')); ?>">Simply electronic</a>			
            							</div>
            						</div>
            						<div class="single-sidebar-product">
        								<div class="single-sidebar-image">
        									<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch6.jpg" alt="product"></a>
        								</div>
        								<div class="sidebar-main-content">
        									<div class="price-box">
        										<span class="regular-price">₹520.00</span>
        									</div>
        									<a href="<?php echo e(route('product.index')); ?>">Dummy electronic</a>			
            							</div>
            						</div>
            						<div class="single-sidebar-product">
        								<div class="single-sidebar-image">
        									<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch7.jpg" alt="product"></a>
        								</div>
        								<div class="sidebar-main-content">
        									<div class="price-box">
        										<span class="regular-price">₹130.00</span>
        										<span class="sale-price">₹220.00</span>
        									</div>
        									<a href="<?php echo e(route('product.index')); ?>">Donec eu electronic</a>			
            							</div>
            						</div>
            					</div>
            				</div>            				
            			</div> -->
            		</div>
            	</div>
            </section>
            <!-- End hot deal area  -->

            <!-- Start one column banner  -->
            <!-- <div class="one-column-banner-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
            				<div class="banner-add single-one-column-banner ">
            					<a href="shop.php" class="tilt"><img src="assets/img/banner/one-column1.jpg" alt="one-column1"></a>
            				</div>
            			</div>
            		</div>
            	</div>
            </div> -->
            <!-- End shop by category  -->            

            <!-- Start tab product  -->
            <!-- <div class="tab-product-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
            				<div class="tab-product-nav">
								<ul class="nav nav-tabs section-title-style1 nav-section-title section-title-border" role="tablist">
								  <li> <a class="active" id="new-product" data-bs-toggle="tab" href="#newproduct" role="tab" aria-controls="newproduct" aria-selected="true">New Product</a></li>
								  <li><a id="on-sale" data-bs-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">On Sale</a></li>
								  <li><a id="feature-products" data-bs-toggle="tab" href="#featureproduct" role="tab" aria-controls="featureproduct" aria-selected="false">Featured Product</a></li>
								</ul>
							</div>
							<div class="tab-main-content">
								<div class="tab-content">
								  <div class="tab-pane fade show active" id="newproduct" role="tabpanel" aria-labelledby="new-product">
								    <div class="home-tab-carousel product-grid-wrapper">
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-35%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch1.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹130.00</span>
	        										<span class="sale-price">₹220.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Dolorum fuga</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch2.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹140.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Condimentum Cap</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch5.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹120.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">typesetting electronic</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-65%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch7.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹90.00</span>
	        										<span class="sale-price">₹120.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Laudantium furniture</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch9.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹170.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Donec eu electronic</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch10.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹125.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch11.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹250.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-20%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch1.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹180.00</span>
	        										<span class="sale-price">₹230.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch2.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹50.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch5.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹180.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    </div>								  	
								  </div>
								  <div class="tab-pane fade" id="onsale" role="tabpanel" aria-labelledby="on-sale">
								    <div class="home-tab-carousel2 product-grid-wrapper">
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-30%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch7.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹170.00</span>
	        										<span class="sale-price">₹420.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Donec eu electronic</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-28%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch9.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹125.00</span>
	        										<span class="sale-price">₹320.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-15%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch10.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹250.00</span>
	        										<span class="sale-price">₹280.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-35%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch11.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹180.00</span>
	        										<span class="sale-price">₹260.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-10%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch1.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹50.00</span>
	        										<span class="sale-price">₹60.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-20%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch2.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹160.00</span>
	        										<span class="sale-price">₹180.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>								    
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-15%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch5.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹130.00</span>
	        										<span class="sale-price">₹150.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Dolorum fuga</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-55%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch7.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹600.00</span>
	        										<span class="sale-price">₹160.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Condimentum Cap</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    		<span class="sale">-25%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch9.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹120.00</span>
	        										<span class="sale-price">₹180.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">typesetting electronic</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-65%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch10.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹90.00</span>
	        										<span class="sale-price">₹120.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Laudantium furniture</a>
								    		</div>
								    	</div>
								    </div>								  	
								  </div>
								  <div class="tab-pane fade" id="featureproduct" role="tabpanel" aria-labelledby="feature-products">
								    <div class="home-tab-carousel3 product-grid-wrapper">
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch11.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹170.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Donec eu electronic</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-25%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch1.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹125.00</span>
	        										<span class="sale-price">₹300.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch2.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹250.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch5.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹130.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Dolorum fuga</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-15%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch7.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹140.00</span>
	        										<span class="sale-price">₹210.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Condimentum Cap</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch9.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹120.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">typesetting electronic</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch10.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹90.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Laudantium furniture</a>
								    		</div>
								    	</div>								    	
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<span class="sale">-20%</span>
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch11.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹180.00</span>
	        										<span class="sale-price">₹230.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch1.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹50.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    	<div class="single-grid-product">
								    		<div class="grid-product-image">
								    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch2.webp" alt="product grid"></a>
            									<div class="product-action">
            										<a href="#"><i class="material-icons">favorite_border</i></a>
            										<a href="#"><i class="material-icons">autorenew</i></a>
            										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
            									</div>
            									<a class="grid-btn" href="cart.php">Add to Cart</a>
								    		</div>
								    		<div class="grid-product-info">
	        									<div class="price-box">
	        										<span class="regular-price">₹180.00</span>
	        									</div>
	        									<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
								    		</div>
								    	</div>
								    </div>								  	
								  </div>
								</div>
							</div>
            			</div>
            		</div>
            	</div>
            </div> -->
            <!-- End tab product  -->

            <!-- Start carousel with image  -->
            <!-- <div class="product-carousel-with-image">
            	<div class="container">
            		<div class="row flex-row-reverse">
            			<div class="col-12 col-sm-12 col-md-4 col-lg-5">
            				<div class="banner-add single-one-column-banner">
            					<a href="shop.php" class="tilt"><img src="assets/img/banner/one-column-height.jpg" alt="one-column1"></a>
            				</div>							
            			</div>            		
            			<div class="col-12 col-sm-12 col-md-8 col-lg-7">
							<div class="section-title section-title-style1 text-start section-title-border">
		            			<h2>Electronic</h2>
		            		</div>            			
						    <div class="cat-slider1 product-grid-wrapper">
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch1.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹120.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">typesetting electronic</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<span class="sale">-30%</span>
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch5.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹170.00</span>
											<span class="sale-price">₹420.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Donec eu electronic</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch7.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹180.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Natural professor</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<span class="sale">-70%</span>
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch9.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹50.00</span>
											<span class="sale-price">₹120.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Dummy electronic</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch10.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹80.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Dummey headphone</a>
						    		</div>
						    	</div>
						    </div>	
							<div class="category-btn default-button">
								<a href="shop.php">Shop All Electronics</a>
							</div>
            			</div>
            		</div>
            	</div>
            </div> -->
            <!-- End carousel with image  -->

            <!-- Start banner style 2 -->
            <!-- <section class="banner-style-2">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12 col-md-4 p-0">
            				<div class="single-banner-style-2">
	            				<div class="banner-add">
	            					<a href="shop.php"><img src="assets/img/product/torch9.webp" alt="product banner"></a>
	            				</div>
	        					<div class="banner-style-2-content">
	        						<p>Headphones</p>
	        						<h3>sale up to 50% off</h3>
	        						<a href="shop.php">Shop Now</a>
	        					</div> 
        					</div>           				
            			</div>
            			<div class="col-12 col-sm-12 col-md-4 p-0">
            				<div class="single-banner-style-2">
	            				<div class="banner-add">
	            					<a href="shop.php"><img src="assets/img/product/torch10.webp" alt="product banner"></a>
	            				</div>
	        					<div class="banner-style-2-content">
	        						<p>DSLR Cameras</p>
	        						<h3>sale up to 30% off</h3>
	        						<a href="shop.php">Shop Now</a>
	        					</div> 
        					</div>           				
            			</div>
            			<div class="col-12 col-sm-12 col-md-4 p-0">
            				<div class="single-banner-style-2">
	            				<div class="banner-add">
	            					<a href="shop.php"><img src="assets/img/product/torch11.webp" alt="product banner"></a>
	            				</div>
	        					<div class="banner-style-2-content">
	        						<p>women’s fashion</p>
	        						<h3>sale up to 40% off</h3>
	        						<a href="shop.php">Shop Now</a>
	        					</div> 
        					</div>           				
            			</div>
            		</div>
            	</div>
            </section> -->
            <!-- End banner style 2  -->

            <!-- Start carousel with image  -->
            <!-- <div class="product-carousel-with-image">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12 col-md-4 col-lg-5">
            				<div class="banner-add single-one-column-banner">
            					<a href="shop.php" class="tilt"><img src="assets/img/banner/one-column-height2.jpg" alt="one-column2"></a>
            				</div>							
            			</div>            		
            			<div class="col-12 col-sm-12 col-md-8 col-lg-7">
							<div class="section-title section-title-style1 text-start section-title-border">
		            			<h2>Fashion</h2>
		            		</div>            			
						    <div class="cat-slider2 product-grid-wrapper">
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch2.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹90.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Laudantium furniture</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<span class="sale">-30%</span>
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch9.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹170.00</span>
											<span class="sale-price">₹420.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Donec eu electronic</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch10.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹130.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Darun court</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch11.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹140.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Chokra bokra shirt</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<span class="sale">-35%</span>
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="assets/img/product/torch10.webp" alt="product grid"></a>
										<div class="product-action">
											<a href="#"><i class="material-icons">favorite_border</i></a>
											<a href="#"><i class="material-icons">autorenew</i></a>
											<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
										</div>
										<a class="grid-btn" href="cart.php">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
										<div class="price-box">
											<span class="regular-price">₹120.00</span>
											<span class="sale-price">₹180.00</span>
										</div>
										<a href="<?php echo e(route('product.index')); ?>">Chawal manser pantu</a>
						    		</div>
						    	</div>
						    </div>	
							<div class="category-btn default-button">
								<a href="shop.php">Shop All Electronics</a>
							</div>
            			</div>
            		</div>
            	</div>
            </div> -->
            <!-- End carousel with image  -->   

            <!-- Start carousel product  -->
            <div class="carousel-product-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
							<div class="section-title section-title-style1  section-title-border">
		            			<h2>NEW PRODUCTS </h2>
		            		</div>            			
						    <div class="carousel-product product-grid-wrapper">
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Sartaj-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹170.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">SIRTAJ</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<span class="sale">-25%</span>
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Excel-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹125.00</span>
    										<span class="sale-price">₹300.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">EXCEL</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Pratap-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹855.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">PRATAP</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/UP Nano-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹130.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">UP NANO</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<span class="sale">-15%</span>
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Vijayshri-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹140.00</span>
    										<span class="sale-price">₹210.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">VIJAYSHRI</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Raftaar-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹120.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">RAFTAR</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Jawan-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹855.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">Jawan</a>
						    		</div>
						    	</div>								    	
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<span class="sale">-20%</span>
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Kohinoor-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹180.00</span>
    										<span class="sale-price">₹230.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">Kohinoor</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/Sir John-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹650.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">SIR JOHN</a>
						    		</div>
						    	</div>
						    	<div class="single-grid-product">
						    		<div class="grid-product-image">
						    			<a href="<?php echo e(route('product.index')); ?>"><img src="<?php echo e(asset('assets/img/UP Nano-min.png')); ?>" alt="product grid"></a>
    									<div class="product-action">
    										<a href="#"><i class="material-icons">favorite_border</i></a>
    										<!-- <a href="#"><i class="material-icons">autorenew</i></a> -->
    										<a data-bs-toggle="modal" data-bs-target="#productQucikView" href="#"><i class="material-icons">visibility</i></a>
    									</div>
    									<a class="grid-btn" href="<?php echo e(url('/dashboard/cart')); ?>">Add to Cart</a>
						    		</div>
						    		<div class="grid-product-info">
    									<div class="price-box">
    										<span class="regular-price">₹180.00</span>
    									</div>
    									<a href="<?php echo e(route('product.index')); ?>">UP NANO</a>
						    		</div>
						    	</div>

						    </div>	
            			</div>
            		</div>
            	</div>
            </div>
            <!-- End carousel product  -->                      

			<section class="featured-product-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 mb-4">
							<div class="featured-product-heading">
								<h3><span>Featured </span> Products</h3>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 featured-product-top">
							<div class="featured-product-image">
								<img src="<?php echo e(asset('assets/img/Tractor-min.png')); ?>" alt="">
							</div>
							<div class="featured-product-content">
								<h5>Tractor</h5>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 featured-product-top">
							<div class="featured-product-image">
								<img src="<?php echo e(asset('assets/img/Raftaar-min.png')); ?>" alt="">
							</div>
							<div class="featured-product-content">
								<h5>Raftaar </h5>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 featured-product-top">
							<div class="featured-product-image">
								<img src="<?php echo e(asset('assets/img/Excel-min.png')); ?>" alt="">
							</div>
							<div class="featured-product-content">
								<h5>EXCEL </h5>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 featured-product-top">
							<div class="featured-product-image">
								<img src="<?php echo e(asset('assets/img/Kohinoor-min.png')); ?>" alt="">
							</div>
							<div class="featured-product-content">
								<h5>Kohinoor </h5>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 featured-product-top">
							<div class="featured-product-image">
								<img src="<?php echo e(asset('assets/img/Jawan-min.png')); ?>" alt="">
							</div>
							<div class="featured-product-content">
								<h5>Jawan </h5>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 featured-product-top">
							<div class="featured-product-image">
								<img src="<?php echo e(asset('assets/img/Veer-min.png')); ?>" alt="">
							</div>
							<div class="featured-product-content">
								<h5>Veer </h5>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 featured-product-top">
							<div class="featured-product-image">
								<img src="<?php echo e(asset('assets/img/UP Nano-min.png')); ?>" alt="">
							</div>
							<div class="featured-product-content">
								<h5>UP Nano </h5>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-12 featured-product-top">
							<div class="featured-product-image">
								<img src="<?php echo e(asset('assets/img/Pratap-min.png')); ?>" alt="">
							</div>
							<div class="featured-product-content">
								<h5>Pratap </h5>
							</div>
						</div>
						
					</div>
				</div>
			</section>
            <!-- Start our brand  -->
            <!-- <div class="our-brand-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
            				<div class="brand-carousel our-brand owl-carousel">
            					<div class="single-brand">
            						<a href="#">
            							<img src="assets/img/brand/brand6.png" alt="brand logo">
            						</a>
            					</div>
            					<div class="single-brand">
            						<a href="#">
            							<img src="assets/img/brand/brand2.png" alt="brand logo">
            						</a>
            					</div>
            					<div class="single-brand">
            						<a href="#">
            							<img src="assets/img/brand/brand3.png" alt="brand logo">
            						</a>
            					</div>
            					<div class="single-brand">
            						<a href="#">
            							<img src="assets/img/brand/brand4.png" alt="brand logo">
            						</a>
            					</div>
            					<div class="single-brand">
            						<a href="#">
            							<img src="assets/img/brand/brand5.png" alt="brand logo">
            						</a>
            					</div>
            					<div class="single-brand">
            						<a href="#">
            							<img src="assets/img/brand/brand1.png" alt="brand logo">
            						</a>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div> -->
            <!-- End our brand  -->



            <!-- Start home latest blog  -->
            <!-- <section class="home-latest-blog-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12 col-md-8 col-lg-9">
							<div class="section-title section-title-style1 text-start section-title-border">
		            			<h2>Latest Blog</h2>
		            		</div>             			
            				<div class="home-latest-blog owl-carousel">
            					<div class="single-latest-blog">
            						<div class="latest-blog-image">
            							<a href="blog.php">
            								<img src="assets/img/blog/blog1.jpg" alt="single blog">
            							</a>
            							<div class="latest-post-time">
            								<span class="latest-post-date">24</span>
            								<span class="latest-post-month">OCT</span>
            							</div>
            						</div>
            						<div class="latest-blog-content">
            							<h3><a href="single-blog.php">Maecenas ultricies</a></h3>
            							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nulla</p>
            						</div>
            					</div>
            					<div class="single-latest-blog">
            						<div class="latest-blog-image">
            							<a href="blog.php">
            								<img src="assets/img/blog/blog2.jpg" alt="single blog">
            							</a>
            							<div class="latest-post-time">
            								<span class="latest-post-date">10</span>
            								<span class="latest-post-month">FEB</span>
            							</div>
            						</div>
            						<div class="latest-blog-content">
            							<h3><a href="single-blog.php">Quisque Egestas</a></h3>
            							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nulla</p>
            						</div>
            					</div>
            					<div class="single-latest-blog">
            						<div class="latest-blog-image">
            							<a href="blog.php">
            								<img src="assets/img/blog/blog3.jpg" alt="single blog">
            							</a>
            							<div class="latest-post-time">
            								<span class="latest-post-date">04</span>
            								<span class="latest-post-month">JUN</span>
            							</div>
            						</div>
            						<div class="latest-blog-content">
            							<h3><a href="single-blog.php">Etiam magna</a></h3>
            							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nulla</p>
            						</div>
            					</div>
            					<div class="single-latest-blog">
            						<div class="latest-blog-image">
            							<a href="blog.php">
            								<img src="assets/img/blog/blog4.jpg" alt="single blog">
            							</a>
            							<div class="latest-post-time">
            								<span class="latest-post-date">18</span>
            								<span class="latest-post-month">JAN</span>
            							</div>
            						</div>
            						<div class="latest-blog-content">
            							<h3><a href="single-blog.php">Praesent Imperdiet</a></h3>
            							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nulla</p>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div class="col-12 col-sm-12 col-md-4 col-lg-3">
							<div class="section-title section-title-style1 text-start section-title-border">
		            			<h2>Instagram</h2>
		            		</div>             			
            				<div class="home-instagram">
             					<div class="single-instagram">
             						<ul>
             							<li><a href="#"><img src="assets/img/instagram/instagram1.jpg" alt="instagram"></a></li>
             							<li><a href="#"><img src="assets/img/instagram/instagram2.jpg" alt="instagram"></a></li>
             							<li><a href="#"><img src="assets/img/instagram/instagram3.jpg" alt="instagram"></a></li>
             							<li><a href="#"><img src="assets/img/instagram/instagram4.jpg" alt="instagram"></a></li>
             							<li><a href="#"><img src="assets/img/instagram/instagram5.jpg" alt="instagram"></a></li>
             							<li><a href="#"><img src="assets/img/instagram/instagram6.jpg" alt="instagram"></a></li>
             							<li><a href="#"><img src="assets/img/instagram/instagram7.jpg" alt="instagram"></a></li>
             							<li><a href="#"><img src="assets/img/instagram/instagram8.jpg" alt="instagram"></a></li>
             							<li><a href="#"><img src="assets/img/instagram/instagram9.jpg" alt="instagram"></a></li>
             						</ul>
             					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </section> -->
            <!-- End home latest blog  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\torch\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>