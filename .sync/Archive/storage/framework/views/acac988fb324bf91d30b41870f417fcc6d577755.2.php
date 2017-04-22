

<?php $__env->startSection('title', '| All Categories'); ?>

<?php $__env->startSection('stylesheets'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Categories</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Total: (<?php echo e($categories->count()); ?>)

                </div>

                <div class="panel-body">
                    <div class="col-md-8 col-sm-12">
                        <div class="form-content">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Options</th>
                                    </thead>

                                    <tbody>

                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <tr>
                                            <td><?php echo e($category->id); ?></td>
                                            <td><?php echo e($category->name); ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <?php echo Html::linkRoute('categories.edit', 'Edit', array( $category->id ), array('class' => 'btn btn-default outline btn-xs ')); ?>

                                                    <?php echo Html::linkRoute('categories.destroy', 'Delete', array( $category->id ), array('class' => 'btn btn-danger outline btn-xs', 'type' => 'button')); ?>


                                                </div>

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
                                <?php echo e(Form::open(['route' => 'categories.store', 'method' => 'POST'])); ?>

                                <div class="form-group">
                                    <?php echo e(Form::label('name', "Name:")); ?>

                                    <?php echo e(Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>

                                </div>
                                <div class="form-group">
                                    <?php echo e(Form::submit('Create', array('class' => 'btn btn-success btn-sm btn-block'))); ?>

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