<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!-- Include your head content here -->
</head>
<body>
 
<?php $__env->startSection('title', 'File Upload'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Components')); ?></h5>
                            <span><?php echo e(__('lorem ipsum dolor sit amet, consectetur adipisicing elit')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('dashboard')); ?>"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"><?php echo e(__('Forms')); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Components')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

<div class="col-md-6">
    <div class="card card-180">
        <div class="card-header"><h3><?php echo e(__('Inline forms')); ?></h3></div>
        <div class="card-body">
        <form action="<?php echo e(route('fileUpload')); ?>" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Upload File in Laravel</h3>
            <?php echo csrf_field(); ?>
            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <strong><?php echo e($message); ?></strong>
            </div>
          <?php endif; ?>
          <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
          <?php endif; ?>
          <label for="custom-file-input"><?php echo e(__('Upload File')); ?></label>
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label><br>
            </div>
            <div class="custom-file">
                  <label for="description"><?php echo e(__('Description')); ?></label>
                  <input type="text" name="fileDescription" class="form-control" id="description" placeholder="File Description">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Upload Files
            </button>
        </form>
    </div>
    <div>
  <div>
<div>
    
    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
        <script src="<?php echo e(asset('js/form-components.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FhaseProjects\Main_File\resources\views/uploadFile/file-upload.blade.php ENDPATH**/ ?>