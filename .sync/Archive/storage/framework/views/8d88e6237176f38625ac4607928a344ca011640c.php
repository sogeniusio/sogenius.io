

<?php $__env->startSection('title', "| $tag->name Tag"); ?>

<?php $__env->startSection('stylesheets'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> <?php echo e($tag->name); ?> Tag <small><?php echo e($tag->posts()->count()); ?>Posts</small></h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Action</a>
                                </li>
                                <li><a href="#">Another action</a>
                                </li>
                                <li><a href="#">Something else here</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table ">
                        <caption>Viewing all posts that are tagged with the <span class="label label-default"><?php echo e($tag->name); ?></span> tag.</caption>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Post Title</th>
                            <th>Associated Tags</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $tag->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td><?php echo e($post->id); ?></td>
                                <td><?php echo e($post->title); ?></td>
                                <td>
                                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <a href="<?php echo e(route('tags.show', $tag->id)); ?>"><span class="label label-default"><?php echo e($tag->name); ?></span></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn2 btn2-xs btn2-default outline">View</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <a href="<?php echo e(route('tags.index')); ?>" class="btn btn-default"><span><i class="fa fa-angle-left"></i></span> Back to tags list</a>
        <?php echo Html::linkRoute('tags.edit', 'Edit', array( $tag->id ), array('class' => 'btn2 btn2-primary')); ?>

    </div>

    <div id="main-blog">
        <div class="row"></div>
        <div class="container">
            <div class="row options">
                <div class="col-md-12">
                    <a href="<?php echo e(route('tags.index')); ?>" class="btn btn-default"><span><i class="fa fa-angle-left"></i></span> Back to tags list</a>
                    <?php echo Html::linkRoute('tags.edit', 'Edit', array( $tag->id ), array('class' => 'btn2 btn2-primary')); ?>

                </div>

            </div>
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
                                <?php echo e($tag->name); ?> Tag <small><?php echo e($tag->posts()->count()); ?>Posts</small>
                            </h2>

                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <?php echo e(Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE'])); ?>

                                    <?php echo Form::submit('Delete', ['class' => 'btn2 btn2-danger', 'style' => 'border-radius: 0px;']); ?>

                                    <?php echo e(Form::close()); ?>

                                </div>

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