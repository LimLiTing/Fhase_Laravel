<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!-- Include your head content here -->
</head>
<body>
 
<?php $__env->startSection('title', 'File List'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h3 class="text-center mb-5">List of Uploaded Files</h3>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">File Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($file->title); ?></td>
                    <td><?php echo e($file->description); ?></td>
                    <td>
                        <!-- <a href="<?php echo e(route('getFile', ['id' => $file->id])); ?>">Download</a> -->
                        <form action="<?php echo e(route('editFile', ['id' => $file->id])); ?>" method="get" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                        <form action="<?php echo e(route('deleteFile', ['id' => $file->id])); ?>" method="post" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FhaseProjects\Main_File\resources\views/uploadFile/fileList.blade.php ENDPATH**/ ?>