<?php $__env->startSection('title', ' | Genius Blog'); ?>

<?php $__env->startSection('stylesheets'); ?>
  

  <?php echo e(Html::style('css/owl.carousel.css')); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <section class="mastwrap">


    <section class="container about  pad-top pad-bottom">

      <div class="row">
            <article class="col-md-5 text-left  inner-pad">
              <h6 class="super-text font2bold black"><?php echo e($post->title); ?><br/></h6>
            </article>
            <article class="col-md-5 col-md-offset-2 text-left ">
              <h3 class="main-heading font2light white"><?php echo e($post->excerpt); ?></h3>
            </article>
      </div>

    </section>








    <section class="container-outer pad-top pad-bottom silver-bg">

    <section class="container news-post ">

      <div class="row">
            <article class="col-md-9 text-left">

              <div class="news-post inner-pad">
                <img class="img-responsive" src="<?php echo e(asset('/images/posts/ftimgs/' . $post->feat_image )); ?>" alt="Post Featured Image">
                    <p class="add-top-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <br/>
                    <a href="<?php echo e(url('news')); ?>" class="btn btn-oscar btn-oscar-dark">view all posts</a>
              </div>

            </article>
            <article class="col-md-3 text-left">
                  <h4 class="sub-heading  white black-bg font4bold">News</h4>
                  <p class="dark add-bottom-quarter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at lacinia est, sed gravida purus. Donec pretium euismod enim. In id magna id lacus tincidunt blandit non quis ante. Maecenas nec turpis at odio volutpat ullamcorper.</p>
                  <h4 class="sub-heading  white black-bg ffont4bold add-top-half">Latest Posts</h4>
                  <ul class="content-list">
                    <?php $__currentLoopData = $posts_by_date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $posts): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                      <li><a href="<?php echo e(url('news/' . $post->slug)); ?>"><?php echo e($post->title); ?></li></a><small><?php echo e($date); ?></small>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  <h4 class="sub-heading  white black-bg ffont4bold add-top-half">Archives</h4>
                  <ul class="content-list">
                    <?php $__currentLoopData = $posts_by_date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $posts): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <h5><?php echo e($post->title); ?> <small><?php echo e($date); ?></small></h5>
                            <?php echo e($post->excerpt); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    
                  </ul>
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
                    <h3 class="sub-heading  font2 black">Designova is our most favorite theme developers. We love their every works.</h3>
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
                    <h3 class="sub-heading  font2 black">Designova is our most favorite theme developers. We love their every works.</h3>
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
                    <h3 class="sub-heading  font2 black">Designova is our most favorite theme developers. We love their every works.</h3>
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