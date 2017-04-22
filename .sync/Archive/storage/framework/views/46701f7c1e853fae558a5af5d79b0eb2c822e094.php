<!-- head -->

<?php echo $__env->make('partials._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--/head-->

<body>



    <!-- Preloader
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <?php echo $__env->yieldContent('partials._preloader'); ?>

    <!-- end : preloader -->


    <!-- Nav Link Show Panel
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php echo $__env->make('partials._show-panel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Mobile Only Navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php echo $__env->make('partials._mobile-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- mobile only navigation : ends -->



    <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <?php echo $__env->make('partials._sidebar-logo-social', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('partials._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- end : masthead -->


    <!-- MASTER CONTENT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="mastcontent">
      
      <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- end : mastwrap -->


    <!-- FOOTER
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- end : mastfoot -->


    <!-- End Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- JS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <?php echo $__env->make('partials._scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

</html>
