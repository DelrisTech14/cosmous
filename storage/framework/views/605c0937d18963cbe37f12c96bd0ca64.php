

<?php $__env->startSection('content'); ?>

    <!-- Start Breadcrumb  -->
    <div class="breadcrump-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="korando-breadcrump">
                        <ul>
                            <li><a href="index.php" title="Go to Home Page">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Breadcrumb  -->            

    <!-- Start page title  -->
    <section class="main-content-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="main-content">
                        <div class="section-title section-title-style1 text-start">
                            <?php 
                            //print_r($data);die;
                            ?>
                            <!--<h2>About Us</h2>-->
                            <h2><?php echo e($data['aboutus'][0]->title); ?></h2>
                        </div>
                    </div>
                </div>            		
            </div>
            <!-- Start about area  -->
            <div class="about-area">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="about-content">
                            <!--<h3>Welcome to<span class="danger"> Cosmos </span> online shop.</h3>-->
                            <h3><?php echo e($data['aboutus'][0]->shortdescription); ?></h3>
                            <p><?php echo e($data['aboutus'][0]->description); ?></p>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <p><strong>Duis aute irure dolor in reprehenderit in voluptate velit ess cill dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa offici deserunt mollit anim id est laborum. </strong></p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae di sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>-->
                            <div class="primary-btn default-button  mt-20">
                                <a href="#">Learn More</a>
                            </div>                                    
                        </div>
                    </div>   
                    <div class="col-12 col-lg-6">
                        <div class="about-image">
                            <!-- <img src="assets/img/about-us.jpg" alt="about image"> -->
                            <!--<img src="<?php echo e(asset('assets/img/product/torch10.webp')); ?>" alt="about image">-->
                           
                            
                            <img src="<?php echo e(asset('images/' . $data['aboutus'][0]->image)); ?>" alt="Image">
                        </div>
                    </div>                  
                </div>                        
            </div>
            <!-- End about area  -->
           <div class="team-area">
                <div class="section-title-wrapper">
                    <div class="section-title section-title-border section-title-style1">
                        <h2>Our Experts</h2>
                    </div>     
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 ">
                        <div class="team-wrapper">
                            <div class="team-img">
                                <img alt="team" src="<?php echo e(asset('images/' . $data['expert'][0]->image)); ?>">
                            </div>
                            <div class="team-content">
                            <h5><?php echo e($data['expert'][0]->name); ?></h5>
                             <!--<h5>Joyce Jimenez</h5>-->
                             <span><?php echo e($data['expert'][0]->description); ?></span>
                                <!--<span>Marketing  Expert</span>-->
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 ">
                        <div class="team-wrapper">
                            <div class="team-img">
                                <img alt="team" src="<?php echo e(asset('images/' . $data['expert'][1]->image)); ?>">
                            </div>
                            <div class="team-content">
                            <h5><?php echo e($data['expert'][1]->name); ?></h5>
                                <span><?php echo e($data['expert'][1]->description); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 ">
                        <div class="team-wrapper">
                            <div class="team-img">
                                <img alt="team" src="<?php echo e(asset('images/' . $data['expert'][2]->image)); ?>">
                            </div>
                            <div class="team-content">
                            <h5><?php echo e($data['expert'][2]->name); ?></h5>
                                <span><?php echo e($data['expert'][2]->description); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3 ">
                        <div class="team-wrapper">
                            <div class="team-img">
                                <img alt="team" src="<?php echo e(asset('images/' . $data['expert'][3]->image)); ?>">
                            </div>
                            <div class="team-content">
                            <h5><?php echo e($data['expert'][3]->name); ?></h5>
                                <span><?php echo e($data['expert'][3]->description); ?></span>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>
            <!-- Start team area  -->

            <!-- Start testimonial area  -->
            <div class="testimonial-area">
                <div class="section-title-wrapper">
                    <div class="section-title section-title-border section-title-style1">
                        <h2>Testimonial</h2>
                    </div>     
                </div>                    
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-carousel client-testimonial owl-carousel">
                            <div class=" single-testimonial">
                                <div class="testimonial-image">
                                    <img src="<?php echo e(asset('images/' . $data['testimonial'][0]->image)); ?>" alt="client">
                                </div>
                                <div class="testimonial-text">
                                    <p><?php echo e($data['testimonial'][0]->description); ?></p>
                                   <!-- <p><?php echo e($data['testimonial'][0]->description); ?></p>-->
                                   <h5><?php echo e($data['testimonial'][0]->name); ?></h5>
                                    <!--<h5><?php echo e($data['testimonial'][0]->name); ?></h5>-->
                                    <span><?php echo e($data['testimonial'][0]->shortdescription); ?></span>
                                    <!--<span>Founder, Retroge LLC</span>-->
                                </div>
                            </div>
                            <div class=" single-testimonial">
                                <div class="testimonial-image">
                                    <img src="<?php echo e(asset('images/' . $data['testimonial'][0]->image)); ?>" alt="client">
                                </div>
                                <div class="testimonial-text">
                                    <p><?php echo e($data['testimonial'][0]->description); ?></p>
                                    <h5><?php echo e($data['testimonial'][0]->name); ?><span></span></h5>
                                    <span>Founder, Retroge LLC</span>
                                </div>
                            </div>
                            <div class=" single-testimonial">
                                <div class="testimonial-image">
                                    <img src="<?php echo e(asset('images/' . $data['testimonial'][0]->image)); ?>" alt="client">
                                </div>
                                <div class="testimonial-text">
                                    <p><?php echo e($data['testimonial'][0]->description); ?></p>
                                    <h5><?php echo e($data['testimonial'][0]->name); ?><span></span></h5>
                                    <span><?php echo e($data['testimonial'][0]->shortdescription); ?></span>
                                </div>
                            </div>
                            <div class=" single-testimonial">
                                <div class="testimonial-image">
                                    <img src="<?php echo e(asset('images/' . $data['testimonial'][0]->image)); ?>" alt="client">
                                </div>
                                <div class="testimonial-text">
                                    <p><?php echo e($data['testimonial'][0]->description); ?></p>
                                    <h5><?php echo e($data['testimonial'][0]->name); ?><span></span></h5>
                                    <span><?php echo e($data['testimonial'][0]->shortdescription); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div> 
            <!-- End testimonial area  --> 
            <!-- Start partner area  -->
           <!-- <div class="partner-area">
                <div class="section-title-wrapper">
                    <div class="section-title section-title-border section-title-style1">
                        <h2>Our Partner</h2>
                    </div>     
                </div>                     
                <div class="row">
                    <div class="col-12">
                        <div class="partner-carousel owl-carousel">
                            <div class="single-partner">
                                <a href="#"><img src="assets/img/brand/brand1.png" alt="partner"></a>
                                <a href="#"><img src="assets/img/brand/brand6.png" alt="partner"></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="assets/img/brand/brand2.png" alt="partner"></a>
                                <a href="#"><img src="assets/img/brand/brand5.png" alt="partner"></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="assets/img/brand/brand3.png" alt="partner"></a>
                                <a href="#"><img src="assets/img/brand/brand4.png" alt="partner"></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="assets/img/brand/brand4.png" alt="partner"></a>
                                <a href="#"><img src="assets/img/brand/brand3.png" alt="partner"></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="assets/img/brand/brand5.png" alt="partner"></a>
                                <a href="#"><img src="assets/img/brand/brand2.png" alt="partner"></a>
                            </div>
                            <div class="single-partner">
                                <a href="#"><img src="assets/img/brand/brand6.png" alt="partner"></a>
                                <a href="#"><img src="assets/img/brand/brand1.png" alt="partner"></a>
                            </div>
                        </div>
                    </div>
                </div>      
            </div> -->
            <!-- End partner area  -->
        </div>
    </section>
    <!-- End page title  -->
<?php $__env->stopSection(); ?>
           
<?php echo $__env->make('layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\torch\resources\views/about/view.blade.php ENDPATH**/ ?>