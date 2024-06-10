
<?php $__env->startSection('content'); ?>
			<!-- Start Breadcrumb  -->
            <div class="breadcrump-area">
            	<div class="container">
            		<div class="row">
            			<div class="col-12 col-sm-12">
            				<div class="korando-breadcrump">
								<ul>
									<li><a href="index.php" title="Go to Home Page">Home</a></li>
									<li>Product</li>
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
						<div class="col-12 col-md-6">
							<div class="single-product-image">
								<div class="fotorama ">
									<a href="<?php echo e(asset('images/' . $data['product'][0]->image)); ?>">
										<img src="<?php echo e(asset('images/' . $data['product'][0]->image)); ?>" alt="product image">
									</a>

                                   
                                
									<a href="<?php echo e(asset('images/other_images' . $data['product'][0]->other_images[0])); ?>">
										<img src="<?php echo e(asset('images/other_images' . $data['product'][0]->other_images)); ?>" alt="product image">
									</a>
									<a href="<?php echo e(asset('assets/img/product/torch10.webp')); ?>">
										<img src="<?php echo e(asset('assets/img/product/torch10.webp')); ?>" alt="product image">
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
								</div>
							</div>							
						</div>
						<div class="col-12 col-md-6">
							<div class="single-product-description">
								<div class="product-description-content">
									<h2><?php echo e($data['product'][0]->name); ?></h2>
									<div class="price-box">
										<span class="regular-price"><?php echo e($data['product'][0]->special_price); ?></span>
										<span class="sale-price"><?php echo e($data['product'][0]->mrp_price); ?></span>
									</div>
									<div class="product-review">
										<i class="material-icons">grade</i>
										<i class="material-icons">grade</i>
										<i class="material-icons">grade</i>
										<i class="material-icons">grade</i>
										<i class="material-icons">grade</i>
									</div>

									<div class="product-meta">
										<p class="availability">Availability : <span><?php echo e($data['product'][0]->availability); ?></span></p>					
										<!-- <p class="product-sku">SKU : <span> f2</span></p>					 -->
									</div>
									<div class="main-content">
										<p><?php echo e($data['product'][0]->description); ?></p>
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
											<li><a href="#"><i class="material-icons">favorite_border</i> Add to wishlist </a></li>
											<!-- <li><a href="#"><i class="material-icons">autorenew</i> Add to compare</a></li> -->
											<li><a href="#"><i class="material-icons">mail_outline</i> Email</a></li>
										</ul>
									</div>
								</div>										
							</div>	
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-sm-12">
							<div class="product-description-tab">
								<div class="product-description-tab-menu">
	                                <ul class="nav" role=tablist>
										<li>
											<a  class="active" id="product-tad-desc" data-bs-toggle="tab" href="#tab-dec" role="tab" aria-controls="product-tad-desc" aria-selected="true">
												Details
											</a>
										</li>
										<li> 
											<a id="product-tab-review" data-bs-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-tab-review" aria-selected="false">
												Reviews
											</a>
										</li>			                                    
									</ul>											
								</div>
								<div class="product-description-tab-content tab-content">
									<div id="tab-dec" class="tab-pane fade active show" aria-labelledby="product-tad-desc" role="tabpanel">
										<div class="product-tab-description">
											<p>Experience powerful illumination with the 55 Watt Hi-Power Focus Torch Light, providing enhanced visibility in various environments.
											Equipped with 6 SMD LED Side Lights, offering additional illumination for increased versatility.
											Powered by a durable 4 Volt Heavy SMF Lead Acid Battery, ensuring long-lasting performance.
											Includes an External Belt for easy carrying, allowing you to take your torch with you on the go.
											Built with an ABS Plastic Body, providing strength and durability to withstand rugged conditions.
											Enjoy the convenience of Solar Charging and Mobile Charging options, ensuring your torch is always ready for use.
											Handle with care: Fragile.</p>
										</div>
									</div>
									<div id="product-review-tab" class="tab-pane fade" aria-labelledby="product-tab-review" role="tabpanel">
										<div class="product-tab-review-area">
											<h4>Customer Reviews</h4>
											<div class="product-all-review">
												<div class="single-author-review">
													<h3>Review after use the product.</h3>
													<div class="review-status">
														<p>
															<span>Quality </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
														<p>
															<span>Price  </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
														<p>
															<span>Value </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
													</div>
													<div class="review-info">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </p>
														<span> Review by plazatheme </span>
														<span> Posted on 10/25/17 </span>
													</div>
												</div>
												<div class="single-author-review">
													<h3>Real product review.</h3>
													<div class="review-status">
														<p>
															<span>Quality </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
														<p>
															<span>Price  </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
														<p>
															<span>Value </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
													</div>
													<div class="review-info">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </p>
														<span> Review by plazatheme </span>
														<span> Posted on 10/25/17 </span>
													</div>
												</div>
												<div class="single-author-review">
													<h3>One of the best seller and good quality product.</h3>
													<div class="review-status">
														<p>
															<span>Quality </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
														<p>
															<span>Price  </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
														<p>
															<span>Value </span>
															<i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i><i class="material-icons">grade</i>
														</p>
													</div>
													<div class="review-info">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. </p>
														<span> Review by plazatheme </span>
														<span> Posted on 10/25/17 </span>
													</div>
												</div>
											</div>
											<div class="show-review-limit product-shorting-bar">
												<div class="show-page">
													<span>Show</span>
													<div class="per-page short-select-option">
														<select>
															<option value="">10</option>
															<option value="">20</option>
															<option value="">30</option>
															<option value="">40</option>
														</select>													
													</div>														
												</div>														
											</div>
											<div class="product-review-form">
												<h4>You're reviewing: <br> Baby Winter Clothes</h4>
												<form action="#">
													<div class="korando-form-group form-group">
														<label>Your Rating <sup>*</sup></label>
														<div class="review-status">
															<p>
																<span>Quality </span>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
															</p>
															<p>
																<span>Value  </span>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
															</p>
															<p>
																<span>Value </span>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
																<a href="#"><i class="material-icons">grade</i></a>
															</p>
														</div>																	
													</div>
													<div class="korando-form-group form-group">
														<label>Nickname <sup>*</sup></label>
														<input type="text" class="control-form">
													</div>
													<div class="korando-form-group form-group">
														<label>Summary <sup>*</sup></label>
														<input type="text" class="control-form">
													</div>
													<div class="korando-form-group form-group">
														<label>Review <sup>*</sup></label>
														<textarea class="control-form"></textarea>
													</div>
													<div class="korando-form-group form-group submit-button">
														<input type="submit" value="Submit Review" class="control-form">
													</div>
												</form>													
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
            	</div>
            </section>			
			<!-- End Maincontent  -->


			<script>
				var card = document.querySelector(".fotorama");

var cardRect, pos, localPos;

function init() {
  cardRect = card.getBoundingClientRect();
  pos = { x: cardRect.left + (card.clientWidth / 2), y: cardRect.top + (card.clientHeight / 2) };
  localPos = {x: 0, y: 0, dx: 0, dy: 0};
}
init();

window.onresize = () => init();

localPos = {x: -150, y: 150, dx: 0, dy: 0}; // For Codepen preview

const SPEED = 0.05;
function tick() {
  localPos.dx += ( localPos.x - localPos.dx) * SPEED;
  localPos.dy += ( localPos.y - localPos.dy) * SPEED;
 
  card.style.setProperty("--x-rot", localPos.dy / 8);
  card.style.setProperty("--y-rot", localPos.dx / 8); 
  
  var bRot = Math.atan2(localPos.dy, localPos.dx );
  card.style.setProperty("--b-rot", bRot);
  
  window.requestAnimationFrame(tick);
  
}

window.requestAnimationFrame(tick);

const MARGIN = 10;
window.onmousemove = mouse => {
  
  localPos.x = mouse.x - pos.x;
  localPos.y = mouse.y - pos.y;
  
  if ( Math.abs(localPos.x) > card.clientWidth / 2 + MARGIN || Math.abs(localPos.y) > card.clientHeight / 2 + MARGIN ) {
    localPos.x = 0;
    localPos.y = 0;
  } 
  
}

			</script>

<?php $__env->stopSection(); ?>
           
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\torch\resources\views/product/tractor.blade.php ENDPATH**/ ?>