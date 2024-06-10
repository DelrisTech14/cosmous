
<?php $__env->startSection('content'); ?>

	<!-- Start Breadcrumb  -->
	<div class="breadcrump-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="korando-breadcrump">
						<ul>
							<li><a href="index.php" title="Go to Home Page">Home</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Breadcrumb  -->            

	<!-- Start Maincontent  -->
	<section class="main-content-area checkout">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="coupon-accordion">
						<!--Accordion Start-->
						<h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
						<div class="coupon-content" id="checkout-login">
							<div class="coupon-info">
								<p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
								<form action="#">
									<p class="form-row-first">
										<label>Username or email <span class="required">*</span></label>
										<input type="text">
									</p>
									<p class="form-row-last">
										<label>Password  <span class="required">*</span></label>
										<input type="text">
									</p>
									<p class="form-row">
										<input type="submit" value="Login">
										<label>
											<input type="checkbox">
												Remember me 
										</label>
									</p>
									<p class="lost-password"><a href="#">Lost your password?</a></p>
								</form>
							</div>
						</div>
						<!--Accordion End-->
						<!--Accordion Start-->
						<h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
						<div class="coupon-checkout-content" id="checkout_coupon">
							<div class="coupon-info">
								<form action="#">
									<p class="checkout-coupon">
										<input type="text" placeholder="Coupon code">
										<input type="submit" value="Apply Coupon">
									</p>
								</form>
							</div>
						</div>
						<!--Accordion End-->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-12">
					<form action="#">
						<div class="checkbox-form">
							<h3>Billing Details</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="country-select checkout-country clearfix">
										<label>Country <span class="required">*</span></label>
										<select class="wide nice-select">
												<option value="Bangladesh">Bangladesh</option>
												<option value="Algeria">Algeria</option>
												<option value="Afghanistan">Afghanistan</option>
												<option value="Ghana">Ghana</option>
												<option value="Albania">Albania</option>
												<option value="Bahrain">Bahrain</option>
												<option value="Colombia">Colombia</option>
												<option value="United State">United State</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
									<label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" value="<?php echo e(old('fname')); ?>" placeholder="Enter First name">
                    <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label for="lname" class="form-label">Last Name </label>
										<input type="text" name="lname" id="lname" class="form-control" value="<?php echo e(old('lname')); ?>" placeholder="Enter Last name">
                    <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<!-- <div class="col-md-12">
									<div class="checkout-form-list">
										<label>Company Name</label>
										<input type="text" placeholder="">
									</div>
								</div> -->
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label for="address" class="form-label">Address </label>
										<input type="text" name="address" id="lname" class="form-control" value="<?php echo e(old('address')); ?>" placeholder="Street address">
										<?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">
										<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label>Town / City</label>
										<input type="text" name="city" id="city" class="form-control" value="<?php echo e(old('city')); ?>">
										<?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>State / County</span></label>
										<input type="text" name="state" id="state" class="form-control" value="<?php echo e(old('state')); ?>">
										<?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Postcode / Zip <span class="required">*</span></label>
										<input type="text" name="zip" id="zip" class="form-control" value="<?php echo e(old('zip')); ?>">
										<?php $__errorArgs = ['zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Email Address</span></label>
										<input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>">
										<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Phone</label>
										<input type="number" name="number" id="number" class="form-control" value="<?php echo e(old('number')); ?>">
										<?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list create-acc">
										<input type="checkbox" id="cbox">
										<label>Create an account?</label>
									</div>
									<div class="checkout-form-list create-account" id="cbox-info">
										<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
										<label>Account password  <span class="required">*</span></label>
										<input type="password" placeholder="password">
									</div>
								</div>
							</div>
							<div class="different-address">
								<div class="ship-different-title">
									<h3>
										<label>Ship to a different address?</label>
										<input type="checkbox" id="ship-box">
									</h3>
								</div>
								<div class="row" id="ship-box-info">
									<div class="col-md-12">
										<div class="country-select checkout-country clearfix">
											<label>Country <span class="required">*</span></label>
											<select class="wide nice-select">
													<option value="Bangladesh">Bangladesh</option>
													<option value="Algeria">Algeria</option>
													<option value="Afghanistan">Afghanistan</option>
													<option value="Ghana">Ghana</option>
													<option value="Albania">Albania</option>
													<option value="Bahrain">Bahrain</option>
													<option value="Colombia">Colombia</option>
													<option value="United State">United State</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>First Name <span class="required">*</span></label>
											<input type="text" name="fname" id="fname" class="form-control" value="<?php echo e(old('fname')); ?>" placeholder="Enter First name">
                    <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Last Name <span class="required">*</span></label>
											<input type="text" name="lname" id="lname" class="form-control" value="<?php echo e(old('lname')); ?>" placeholder="Enter Last name">
                    <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>
									<!-- <div class="col-md-12">
										<div class="checkout-form-list">
											<label>Company Name</label>
											<input type="text" placeholder="">
										</div>
									</div> -->
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Address <span class="required">*</span></label>
											<input type="text" name="address" id="lname" class="form-control" value="<?php echo e(old('address')); ?>" placeholder="Street address">
										<?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Town / City <span class="required">*</span></label>
											<input type="text" name="city" id="city" class="form-control" value="<?php echo e(old('city')); ?>">
										<?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>State / County <span class="required">*</span></label>
											<input type="text" name="state" id="state" class="form-control" value="<?php echo e(old('state')); ?>">
										<?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Postcode / Zip <span class="required">*</span></label>
											<input type="text" name="zip" id="zip" class="form-control" value="<?php echo e(old('zip')); ?>">
										<?php $__errorArgs = ['zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Email Address <span class="required">*</span></label>
											<input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>">
										<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>
									<div class="col-md-12">
										<div class="checkout-form-list">
											<label>Phone  <span class="required">*</span></label>
											<input type="number" name="number" id="number" class="form-control" value="<?php echo e(old('number')); ?>">
										<?php $__errorArgs = ['number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>
								</div>
								<div class="order-notes">
									<div class="checkout-form-list">
										<label>Order Notes</label>
										<textarea name="description" id="description" class="form-control" value="<?php echo e(old('description')); ?>" placeholder="Notes about your order, e.g. special notes for delivery." rows="10" cols="30" id="checkout-mess"></textarea>
										<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-6 col-12">
					<div class="your-order">
						<h3>Your order</h3>
						<div class="your-order-table table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th class="cart-product-name">Product</th>
										<th class="cart-product-total">Total</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity"> × 1</strong></td>
										<td class="cart-product-total"><span class="amount">₹165.00</span></td>  
									</tr>
									<tr class="cart_item">
										<td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity"> × 1</strong></td>
										<td class="cart-product-total"><span class="amount">₹165.00</span></td>  
									</tr>
								</tbody>
								<tfoot>
									<tr class="cart-subtotal">
										<th>Cart Subtotal</th>
										<td><span class="amount">₹215.00</span></td>
									</tr>
									<tr class="order-total">
										<th>Order Total</th>
										<td><strong><span class="amount">₹215.00</span></strong></td>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="payment-method">
							<div class="payment-accordion">
								<div id="accordion">
									<div class="card">
									<div id="#payment-1" class="card-header">
										<h5 class="panel-title">
											<div class="card payment-form">
												<h3 class="card-title h5 mb-3">Payment Details</h3>
												
												<div class="form-check">
            <input checked type="radio" name="payment_method" value="cod" id="payment_method_one" class="form-check-input"/>
            <label for="payment_method_one" class="form-check-label">COD (Cash on Delivery)</label>
        </div>
        <div class="form-check">
            <input type="radio" name="payment_method" value="credit_card" id="payment_method_two" class="form-check-input">
            <label for="payment_method_two" class="form-check-label">Credit Card</label>
        </div>

												<!-- <div class="">
													<input checked type="radio" name="payment_method" value="cod" id="payment_method_one"  class="form-check-input">
													<label >COD</label>
</div>

<div class="">
													<input  type="radio" name="payment_method" value="online" id="payment_method_two"  class="form-check-input">
													<label  >online</label>
</div> -->
												<div class= "card-body p-0">
													<div class="col-md-6">
														<label for="card_number" class="mb-2">Card Number</label>
														<input type="text" name="card_number" id="card_number" placeholder="Valid Card number"/>
</div>
<div class="row">
	<div class="col-md-6">
		<label for="expiry_date" class="mb-2">Expiry Date</label>
		<input type="text" name="expiry_date" id="expiry_date" placeholder="MM/YYYY"/>
</div> 

<div class="row">
	<div class="col-md-6">
		<label for="expiry_date" class="mb-2">CVV Code</label>
		<input type="text" name="expiry_date" id="expiry_date" placeholder="MM/YYYY"/>
</div> 
</div>

										<a aria-controls="collapseOne" aria-expanded="true" data-bs-target="#collapseOne" data-bs-toggle="collapse" class="">
										<br>
											Direct Bank Transfer.
										</a>
										</h5>
									</div>
									<div data-parent="#accordion" class="collapse show" id="collapseOne">
										<div class="card-body">
										<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
									</div>
									<div class="card">
									<div id="#payment-2" class="card-header">
										<h5 class="panel-title">
										<a aria-controls="collapseTwo" aria-expanded="false" data-bs-target="#collapseTwo" data-bs-toggle="collapse" class="collapsed">
											Cheque Payment
										</a>
										</h5>
									</div>
									<div data-parent="#accordion" class="collapse" id="collapseTwo">
										<div class="card-body">
										<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
										</div>
									</div>
									</div>
									<div class="card">
									<div id="#payment-3" class="card-header">
										<h5 class="panel-title">
										<a aria-controls="collapseThree" aria-expanded="false" data-bs-target="#collapseThree" data-bs-toggle="collapse" class="collapsed">
											Master Card
										</a>

										</h5>
									</div>
									<div data-parent="#accordion" class="collapse" id="collapseThree">
										<div class="card-body">
										<p>Make your payment by master card. We support many card. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account. <br> <img src="<?php echo e(asset('assets/img/payment-logo.png" alt="payment-logo')); ?>"></p>

										</div>
									</div>
									</div>
								</div>
								<div class="order-button-payment">
									<input type="submit" value="Place order">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>         	
	</section>			
	<!-- End Maincontent  -->
<?php $__env->stopSection(); ?>

            
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\torch\resources\views/checkout/view.blade.php ENDPATH**/ ?>