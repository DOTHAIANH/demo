<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php if(!empty( Auth::user()->image )): ?>
                    <img src="<?php echo e(Auth::user()->image); ?>" class="user-image"  onerror="this.src='https://www.gravatar.com/avatar/?s=50'">
                <?php else: ?>
                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="user-image" alt=""/>
                <?php endif; ?>
            </div>
            <div class="pull-left info">
                <?php if(Auth::guest()): ?>
                <p>Admin</p>
                <?php else: ?>
                    <p><?php echo e(Auth::user()->name); ?></p>
                <?php endif; ?>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <?php echo $__env->make('backend.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>