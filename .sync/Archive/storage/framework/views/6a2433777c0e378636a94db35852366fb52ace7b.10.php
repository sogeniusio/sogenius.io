<?php $__env->startSection('title', '| Create New Post'); ?>

<?php $__env->startSection('stylesheets'); ?>

    <?php echo Html::style('/css/parsley.css'); ?>

    <?php echo Html::style('/css/select2.min.css'); ?>


    <!-- TINYMCE WYSIWYG EDITOR -->
    <script type="text/javascript" src="<?php echo e(asset('/packages/tinymce/tinymce.min.js')); ?>"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#body',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });
    </script>

    <style>
        .mastfoot {
            margin-bottom: 40px !important;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create New Post</h1>
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

                    <div class="form-content">

                        <div class="col-md-12">

                            <?php echo Form::open(['id' => 'post-form', 'data-parsley-validate' => '', 'name' => 'post-form', 'route' => 'posts.store', 'files' => true ]); ?>

                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('title', "Title:")); ?>

                                        <?php echo e(Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255'))); ?>

                                    </div>
                                    <div class="form-group">
                                        <?php echo e(Form::label('slug', "Slug:")); ?>


                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon3"><?php echo e(url('/')); ?>/</span>
                                            <?php echo e(Form::text('slug', null, array('id' => 'basic-url', 'class' => 'form-control', 'aria-label' => 'basic-addon3', 'required' => '', 'minlength' => '5', 'maxlength' => '255'))); ?>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <?php echo e(Form::label('category_id', "Category:")); ?>


                                        <select class="form-control" name="category_id">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <?php echo e(Form::label('tags', "Tags:")); ?>


                                        <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                <option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <?php echo e(Form::label('excerpt', "Excerpt:")); ?>

                                <?php echo e(Form::text('excerpt', null, array('id' => 'post_excerpt', 'class' => 'form-control'))); ?>

                            </div>

                            <div class="form-group">
                                <?php echo e(Form::label('featured_image', "Featured Image:")); ?>

                                <?php echo e(Form::file('featured_image')); ?>

                            </div>

                            <div class="form-group">
                                <?php echo e(Form::label('body', "Body:")); ?>

                                <?php echo e(Form::textarea('body', null, array('id' => 'post_body', 'class' => 'form-control'))); ?>

                            </div>

                            <div class="form-group">
                                <?php echo e(Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block'))); ?>

                            </div>

                            <?php echo Form::close(); ?>


                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <?php echo Html::script('/js/libs/parsley.min.js'); ?>

    <?php echo Html::script('/js/libs/select2.min.js'); ?>


    <script type="text/javascript">

        $('.select2-multi').select2();

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>