<?php if($user): ?>
<li class="dropdown dropdown-user nav-item">
    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
        <div class="user-nav d-sm-flex d-none">
            <span class="user-name text-bold-600"><?php echo e($user->name, false); ?></span>
            <span class="user-status"><i class="fa fa-circle text-success"></i> <?php echo e(trans('admin.online'), false); ?></span>
        </div>
        <span>
            <img class="round" src="<?php echo e($user->getAvatar(), false); ?>" alt="avatar" height="40" width="40" />
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a href="<?php echo e(admin_url('auth/setting'), false); ?>" class="dropdown-item">
            <i class="feather icon-user"></i> <?php echo e(trans('admin.setting'), false); ?>

        </a>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="<?php echo e(admin_url('auth/logout'), false); ?>">
            <i class="feather icon-power"></i> <?php echo e(trans('admin.logout'), false); ?>

        </a>
    </div>
</li>
<?php endif; ?><?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/partials/navbar-user-panel.blade.php ENDPATH**/ ?>