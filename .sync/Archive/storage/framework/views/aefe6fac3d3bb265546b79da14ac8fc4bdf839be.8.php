<?php $__env->startSection('title', ' | Genius Blog'); ?>

<?php $__env->startSection('stylesheets'); ?>
    

    <?php echo e(Html::style('css/owl.carousel.css')); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="mastwrap">


        <section class="container about  pad-top pad-bottom">

            <div class="row">
                <article class="col-md-5 text-left  inner-pad">
                    <h6 class="super-text  font2bold black">News, Journals and Posts</h6>
                </article>
                <article class="col-md-5 col-md-offset-2 text-left ">
                    <h3 class="main-heading  font2light white">Recent happenings and updates around us</h3>
                </article>
            </div>

        </section>

        <section class="container-outer silver-bg">
            <section class="container about  pad-top pad-bottom">

                <div class="row">
                    <article class="col-md-12 text-left">
                    </article>
                </div>

                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="row">
                        <article class="col-md-8 col-md-offset-2 text-left ">
                            <h6 class="promo-text font2semibold black"><?php echo e(date('M j, Y', strtotime( $post->created_at ))); ?></h6>
                            <div class="row">
                              <div class="col-lg-3">
                                <img class="img-responsive" src="<?php echo e(asset('/images/posts/ftimgs/' . $post->feat_image )); ?>" alt="Post Featured Image" />
                              </div>
                              <div class="col-lg-9">
                                <h3 class="main-heading font2light black"><?php echo e($post->excerpt); ?></h3> <br/>
                              </div>
                            </div>
                            <a href="post.html" class="btn btn-oscar btn-oscar-dark">View Post</a>
                        </article>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


                <div class="row add-top">
                    <article class="col-md-8 col-md-offset-2 text-left ">
                        <h6 class="promo-text font2semibold black">22 Sep 2016</h6>
                        <h3 class="main-heading  font2light black">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam. </h3> <br/>
                        <a href="post.html" class="btn btn-oscar btn-oscar-dark">View Post</a>
                    </article>
                </div>
                <div class="row add-top">
                    <article class="col-md-8 col-md-offset-2 text-left ">
                        <h6 class="promo-text font2semibold black">22 Sep 2016</h6>
                        <h3 class="main-heading  font2light black">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam. </h3> <br/>
                        <a href="post.html" class="btn btn-oscar btn-oscar-dark">View Post</a>
                    </article>
                </div>

            </section>
        </section>


        <section class="container-outer color-bg">
            <section class="testimonials  pad-top pad-bottom">

                <div class="container">
                    <div class="row">
                        <article class="col-md-12">
                            <section class="carousel-outer-wrap add-top-quarter">
                                <!-- Set up your HTML -->
                                <div class="owl-carousel owl-nav-sticky-extra-wide testimonial-carousel ">

                                    <div class="testimonial-block text-center">
                                        <div class="testimonial-info">
                                            <img alt="" title="" src="images/testimonial/01.jpg">
                                            <h3 class="sub-heading  font2 black">Designova is our most favorite theme
                                                developers. We love their every works.</h3>
                                            <p>Clara Sealand</p>
                                            <h5>CEO - MegaDreams LLC</h5>
                                            <ul class="testimonial-social">
                                                <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="testimonial-block ">
                                        <div class="testimonial-info">
                                            <img alt="" title="" src="images/testimonial/01.jpg">
                                            <h3 class="sub-heading  font2 black">Designova is our most favorite theme
                                                developers. We love their every works.</h3>
                                            <p>Clara Sealand</p>
                                            <h5>CEO - MegaDreams LLC</h5>
                                            <ul class="testimonial-social">
                                                <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="testimonial-block ">
                                        <div class="testimonial-info">
                                            <img alt="" title="" src="images/testimonial/01.jpg">
                                            <h3 class="sub-heading  font2 black">Designova is our most favorite theme
                                                developers. We love their every works.</h3>
                                            <p>Clara Sealand</p>
                                            <h5>CEO - MegaDreams LLC</h5>
                                            <ul class="testimonial-social">
                                                <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </article>
                    </div>
                </div>


            </section>
        </section>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>