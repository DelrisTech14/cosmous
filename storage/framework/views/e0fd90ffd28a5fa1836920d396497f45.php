
<?php $__env->startSection('content'); ?>
	<!-- Start Breadcrumb  -->
	<div class="breadcrump-area">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="korando-breadcrump">
						<ul>
							<li><a href="index.php" title="Go to Home Page">Home</a></li>
							<li>Contact</li>
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
					<div class="main-content">
						<div class="section-title section-title-style1 text-start">
							<h2>Contact Us</h2>
						</div>							
						<div class="contact-map">
							<div class="mapouter">
								<div class="gmap_canvas">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.335046514333!2d75.89112842435898!3d22.752944076338185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396302af403406fb%3A0x5b50834b117f8bab!2sVijay%20Nagar%2C%20Indore%2C%20Madhya%20Pradesh%20452010!5e0!3m2!1sen!2sin!4v1713191505409!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									<a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
								</div>
							</div>
						</div>
						<div class="contact-us-area">
							<div class="col-lg-6 mx-auto">
								<form id="contact-form" action="https://whizthemes.com/nazmul/php/mail.php" method="post">
									<p>Jot us a note and we’ll get back to you as quickly as possible.</p>
									<div class="korando-form-group form-group">
										<label>Name <sup>*</sup></label>
										<input type="text" name="name" class="control-form">
									</div>
									<div class="korando-form-group form-group">
										<label>Email <sup>*</sup></label>
										<input type="text" name="email" class="control-form">
									</div>
									<div class="korando-form-group form-group">
										<label>Subject <sup>*</sup></label>
										<input type="text" name="subject" class="control-form">
									</div>
									<div class="korando-form-group form-group">
										<label>Message <sup>*</sup></label>
										<textarea name="message" class="control-form"></textarea>
									</div>
									<div class="korando-form-group form-group submit-button">
										<input type="submit" class="control-form" value="Submit">
									</div>
								</form>
								<p class="form-messege"></p>	
							</div>						
						</div>
					</div>
				</div>            		
			</div>
		</div>
	</section>			
	<!-- End Maincontent  -->

<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\torch\resources\views/contact/view.blade.php ENDPATH**/ ?>