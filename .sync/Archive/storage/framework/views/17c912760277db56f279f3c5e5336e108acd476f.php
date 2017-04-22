<header class="masthead ">
  <div class="container">
    <div class="row">
      <!-- <article class="col-md-3">
        <a href="index.html"><img alt="" title="" class="main-logo " src="images/logo.png"></a>
      </article> -->
      <article class="col-md-6 text-left no-pad">
        <nav class="mastnav ">

              <ul class="main-menu ">

              <li class="<?php echo e(Request::path() ==  'about' ? 'activelink' : ''); ?> main-link font2">
                   <a href="<?php echo e(url('about')); ?>"></i>About</a>
               </li>
                <li class="<?php echo e(Request::path() ==  'news' ? 'activelink' : ''); ?> main-link font2">
                   <a href="<?php echo e(url('news')); ?>"></i>News</a>
               </li>
                <li class="<?php echo e(Request::path() ==  'contact' ? 'activelink' : ''); ?> main-link font2">
                   <a href="<?php echo e(url('contact')); ?>"></i>Contact</a>
               </li>

                  

                    
                    
                

                
                <!-- <li>

                    <a class="main-link font1 sub-menu-trigger" href="#">Project</a>
                    <div class="sub-menu font1">
                        <a href="project01.html">Slider</a>
                        <a href="project02.html">Video</a>
                        <a href="project03.html">Parallax</a>
                    </div>
                </li> -->
              </ul>
        </nav>
      </article>
      <!-- WORKS FILTER -->

        <?php echo $__env->yieldContent('works-filter'); ?>

      <!-- END WORKS FILTER -->
    </div>
  </div>
</header>
