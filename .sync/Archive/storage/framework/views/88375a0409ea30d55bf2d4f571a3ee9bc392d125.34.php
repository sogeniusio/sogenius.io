

<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

  <?php echo Html::style('/css/parsley.css'); ?>

  <?php echo Html::style('/css/select2.min.css'); ?>


  <style>
      .mastfoot {
          margin-bottom: 40px !important;
      }
  </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header"><?php echo e($post->title); ?><div class="pull-right">
            <div class="col-md-12">
                <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-default"><span><i
                                class="fa fa-angle-left"></i></span> Back to posts list</a>
                <?php echo Html::linkRoute('posts.edit', 'Edit', array( $post->id ), array('class' => 'btn btn-primary')); ?>

            </div>
          </div></h1>

      </div>
  </div>

  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                Some text to be added later
                </div>


              <div class="panel-body">

                <div class="row">
                  <div class="col-lg-8">
                    <div class="entry-header">

                        <div class="entry-thumbnail">
                            <img class="img-responsive" src="<?php echo e(asset('/images/posts/ftimgs/' . $post->feat_image )); ?>" alt="Post Featured Image">
                        </div>
                    </div>
                    <p><?php echo $post->body; ?></p>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-block">
                        <h4 class="card-title">Post Metadata</h4>
                        <p>
                          <i class="fa fa-globe"></i> <strong>Location:</strong> <a href="<?php echo e(url($post->slug)); ?>"><?php echo e(url($post->slug)); ?></a>
                        </p>
                        <p class="card-text"><?php echo e($post->excerpt); ?></p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="icon-user"></i> Posted by: <a href="#">Admin</a></li>
                        <li class="list-group-item"><i class="fa fa-calendar"></i> <?php echo e(date('M j, Y h:ia', strtotime( $post->created_at ))); ?></li>
                        <li class="list-group-item"><span class="fa fa-tag" aria-hidden="true"></span>
                            <span class="label label-primary"><?php echo e($post->category->name); ?></span></li>
                        <li class="list-group-item"><i class="fa fa-tags"></i>
                            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <span class="label label-default"><?php echo e($tag->name); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?></li>
                            <li class="list-group-item"><i class="fa fa-comments-o"></i> <?php echo e($post->comments()->count()); ?> Comments</li>

                            <li class="list-group-item"><i class="fa fa-share-alt" aria-hidden="true"></i>
 <a href="#">39</a> Shares</li>

                      </ul>
                      <div class="card-block">


                          
                            <?php echo Form::open(['route' =>['posts.destroy', $post->id], 'method' => 'DELETE']); ?>



                            <?php echo Form::submit('Delete Post', ['class' => 'card-link btn btn-danger btn-block', 'type' => 'button']); ?>


                            <?php echo Form::close(); ?>

                      </div>
                    </div>

                          </div>
                </div>


                <div class="row">
                  <div class="col-lg-12">
                    <h4>Comments<small> <?php echo e($post->comments()->count()); ?> Total</small></h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td><?php echo e($comment->name); ?></td>
                                <td><?php echo e($comment->email); ?></td>
                                <td><?php echo e($comment->comment); ?></td>
                                <td>
                                    <a href="<?php echo e(route('comments.edit', $comment->id)); ?>"
                                       class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span></a>
                                    <a href="<?php echo e(route('comments.delete', $comment->id)); ?>"
                                       class="btn btn-xs btn-danger"><span class="fa fa-trash"></span></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        </tbody>
                    </table>
                  </div>

                </div>


              </div>
            </div>
          </div>
        </div>



    <div id="main-blog">
        <div class="row"></div>
        <div class="container">

            <div class="row">

                <div id="content" class="site-content col-md-12">
                    <div class="post">


                        <div class="post-content">

                            <h2 class="entry-title">
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="author"><i class="fa fa-user"></i>Admin</li>
                                    <li class="publish-date">
                                    </li>
                                    <li style="text-transform: lowercase;">
                                    </li>
                                    <li><
                                    </li>
                                    <li class="tag">
                                    </li>
                                    <li class="comments">
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-summary">

                            </div>
                            <hr>





                            <div class="row row-fix text-center">


                            </div>

                        </div>
                    </div><!--/post-->
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <?php echo Html::script('/js/parsley.min.js'); ?>

    <?php echo Html::script('/js/select2.min.js'); ?>


    <script type="text/javascript">

        $('.select2-multi').select2();

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>