<!-- head -->

<?php echo $__env->make('admin.partials._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--/head-->
<body>
    <div id="wrapper">

      <?php echo $__env->make('admin.partials._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          <div id="page-wrapper">


          <div id="messages">

              <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          </div>


              <?php echo $__env->yieldContent('content'); ?>

              <div class="row">
                <div class="container-fluid">
                  <div class="col-lg-12">
                    <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                  </div>

                </div>

              </div>


          </div>
          <!-- /#page-wrapper -->



        </div>


      <!--/javascripts-->

      <?php echo $__env->make('admin.partials._scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- /javascripts -->
</body>
</html>
