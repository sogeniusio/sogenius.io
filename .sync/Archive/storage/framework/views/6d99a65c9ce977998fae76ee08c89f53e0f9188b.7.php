

<?php $__env->startSection('title', '| All Tags'); ?>

<?php $__env->startSection('stylesheets'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tags</h1>
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
                    <div class="col-md-8 col-sm-12">
                        <div class="form-content">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                                                <th>Name</th>
                                    <th></th>
                                    </thead>

                                    <tbody>

                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <tr>
                                            <td><a href="<?php echo e(route('tags.show', $tag->id)); ?>"><?php echo e($tag->name); ?> <i style="font-weight:100;" class="fa fa-chevron-right"></i></a></td>
                                            <td><?php echo e($tag->posts()->count()); ?>


                                              <?php if($tag->posts()->count()): ?> === 1)
                                                Post
                                              <?php else: ?>
                                                Posts
                                              <?php endif; ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-content">
                            <div class="col-md-12">
                                <?php echo e(Form::open(['route' => 'tags.store', 'method' => 'POST'])); ?>

                                <div class="form-group">
                                    <?php echo e(Form::label('name', "Name:")); ?>

                                    <?php echo e(Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>

                                </div>
                                <div class="form-group">
                                    <?php echo e(Form::submit('Create Tag', array('class' => 'btn btn-success btn-sm btn-block'))); ?>

                                </div>



                                <?php echo e(Form::close()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>