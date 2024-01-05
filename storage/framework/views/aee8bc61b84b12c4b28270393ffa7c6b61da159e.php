

<?php $__env->startSection('title', 'Edit File'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <form action="<?php echo e(route('updateFile', ['id' => $file->id])); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Use the PUT method for updates -->
            
            <!-- Existing input fields -->
            <label for="custom-file-input"><?php echo e(__('Upload File')); ?></label>
            <div class="custom-file">
                <input type="file" name="file" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select file</label><br>
            </div>
            <div class="custom-file">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo e($file->description); ?>">
            </div>
            
            <!-- Add other input fields as needed -->
            
            <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                Update File
            </button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FhaseProjects\Main File\resources\views/uploadFile/editFile.blade.php ENDPATH**/ ?>