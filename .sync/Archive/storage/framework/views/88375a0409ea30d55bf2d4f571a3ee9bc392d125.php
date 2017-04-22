

<?php $__env->startSection('title', '| View Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

    <?php echo Html::style('/css/style.css'); ?>

    <?php echo Html::style('/css/buttons.css'); ?>


    <style>
        .footer-top {
            display: none;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="row options">
                <div class="col-md-12">
                    <a href="<?php echo e(route('posts.index')); ?>" class="btn2 btn2-default"><span><i
                                    class="fa fa-angle-left"></i></span> Back to posts list</a>
                    <?php echo Html::linkRoute('posts.edit', 'Edit', array( $post->id ), array('class' => 'btn2 btn2-primary')); ?>

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
                        <div class="entry-header">

                            <div class="entry-thumbnail">
                                <img class="img-resxponsive" src="/images/blog/post5.jpg" alt="">
                            </div>
                        </div>

                        <div class="post-content">

                            <h2 class="entry-title">
                                <?php echo e($post->title); ?>

                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="author"><i class="fa fa-user"></i>Admin</li>
                                    <li class="publish-date"><i
                                                class="fa fa-calendar"></i><?php echo e(date('M j, Y h:ia', strtotime( $post->created_at ))); ?>

                                    </li>
                                    <li style="text-transform: lowercase;"><i class="fa fa-globe"
                                                                              aria-hidden="true"></i><?php echo e(url($post->slug)); ?>

                                    </li>
                                    <li><span class="fa fa-tag" aria-hidden="true"></span>
                                        <span class="label label-primary"><?php echo e($post->category->name); ?></span>
                                    </li>
                                    <li class="tag"><i class="fa fa-tags"></i>
                                        <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <span class="label label-default"><?php echo e($tag->name); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </li>
                                    <li class="comments"><i
                                                class="fa fa-comments-o"></i><?php echo e($post->comments()->count()); ?> Comments
                                    </li>
                                </ul>
                            </div>
                            <div class="entry-summary">
                                <p><?php echo e($post->body); ?></p>

                            </div>
                            <hr>

                            <h2 class="post-comments entry-title" style="margin-top: 40px;">
                                Comments
                                <small><?php echo e($post->comments()->count()); ?> total</small>
                            </h2>

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
                                               class="btn2 btn2-xs btn2-primary"><span class="fa fa-pencil"></span></a>
                                            <a href="<?php echo e(route('comments.delete', $comment->id)); ?>"
                                               class="btn2 btn2-xs btn2-danger"><span class="fa fa-trash"></span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                </tbody>
                            </table>

                            <div class="row row-fix text-center">

                                <?php echo Form::open(['route' =>['posts.destroy', $post->id], 'method' => 'DELETE']); ?>



                                <?php echo Form::submit('Delete Post', ['class' => 'btn2 btn2-danger special', 'style' => 'border-radius: 0px;']); ?>


                                <?php echo Form::close(); ?>

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