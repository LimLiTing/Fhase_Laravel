<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="<?php echo e(route('dashboard')); ?>">
            <div class="logo-img">
               <img height="30" src="<?php echo e(asset('img/logo_white.png')); ?>" class="header-brand-img" title="RADMIN"> 
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <?php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
    ?>
    
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item <?php echo e(($segment1 == 'dashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('dashboard')); ?>"><i class="ik ik-bar-chart-2"></i><span><?php echo e(__('Dashboard')); ?></span></a>
                </div>
                <div class="nav-lavel"><?php echo e(__('Layouts')); ?> </div>
                <div class="nav-item <?php echo e(($segment1 == 'pos') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('inventory')); ?>"><i class="ik ik-shopping-cart"></i><span><?php echo e(__('Inventory')); ?></span> </a>
                </div>
                <div class="nav-item <?php echo e(($segment1 == 'upload-file' || $segment1 == 'fileList') ? 'active open' : ''); ?> has-sub">
                    <a href="#"><i class="ik ik-alert-circle"></i><span><?php echo e(__('Blank')); ?></span></a>
                    <div class="submenu-content">
                        <!-- upload file -->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_upload')): ?>
                        <a href="<?php echo e(url('upload-file')); ?>" class="menu-item <?php echo e(($segment1 == 'upload-file') ? 'active' : ''); ?>"><?php echo e(__('Upload File')); ?></a>
                         <?php endif; ?>
                         <!-- view upload file list -->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_file')): ?>
                        <a href="<?php echo e(url('fileList')); ?>" class="menu-item <?php echo e(($segment1 == 'fileList') ? 'active' : ''); ?>"><?php echo e(__('File List')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="nav-item <?php echo e(($segment1 == 'pos') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('pos')); ?>"><i class="ik ik-printer"></i><span><?php echo e(__('POS')); ?></span> </a>
                </div>
                <div class="nav-item <?php echo e(($segment1 == 'accounting') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('accounting')); ?>"><i class="ik ik-printer"></i><span><?php echo e(__('Accounting')); ?></span> <span class=" badge badge-success badge-right"><?php echo e(__('New')); ?></span></a>
                </div>
                <div class="nav-item <?php echo e(($segment1 == 'users' || $segment1 == 'roles'||$segment1 == 'permission' ||$segment1 == 'user') ? 'active open' : ''); ?> has-sub">
                    <a href="#"><i class="ik ik-user"></i><span><?php echo e(__('Adminstrator')); ?></span></a>
                    <div class="submenu-content">
                        <!-- only those have manage_user permission will get access -->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_user')): ?>
                        <a href="<?php echo e(url('users')); ?>" class="menu-item <?php echo e(($segment1 == 'users') ? 'active' : ''); ?>"><?php echo e(__('Users')); ?></a>
                        <a href="<?php echo e(url('user/create')); ?>" class="menu-item <?php echo e(($segment1 == 'user' && $segment2 == 'create') ? 'active' : ''); ?>"><?php echo e(__('Add User')); ?></a>
                         <?php endif; ?>
                         <!-- only those have manage_role permission will get access -->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_roles')): ?>
                        <a href="<?php echo e(url('roles')); ?>" class="menu-item <?php echo e(($segment1 == 'roles') ? 'active' : ''); ?>"><?php echo e(__('Roles')); ?></a>
                        <?php endif; ?>
                        <!-- only those have manage_permission permission will get access -->
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_permission')): ?>
                        <a href="<?php echo e(url('permission')); ?>" class="menu-item <?php echo e(($segment1 == 'permission') ? 'active' : ''); ?>"><?php echo e(__('Permission')); ?></a>
                        <?php endif; ?>
                    </div>
                </div>


                <!-- Include demo pages inside sidebar start-->
                <?php echo $__env->make('pages.sidebar-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Include demo pages inside sidebar end-->

            </nav>   
                
        </div>
    </div>
</div><?php /**PATH D:\FhaseProjects\Main File\resources\views/include/sidebar.blade.php ENDPATH**/ ?>