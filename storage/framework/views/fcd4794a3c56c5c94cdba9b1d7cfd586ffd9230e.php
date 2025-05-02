<div class="btn-group filter-button-group dropdown" style="margin-right:3px">
    <button
            class="btn btn-primary <?php echo e($btn_class, false); ?>"
            <?php if($only_scopes): ?>data-toggle="dropdown"<?php endif; ?>
            <?php if($scopes->isNotEmpty()): ?> style="border-right: 0" <?php endif; ?>
    >
        <i class="feather icon-filter"></i><?php if($filter_text): ?><span class="d-none d-sm-inline">&nbsp;&nbsp;<?php echo e(trans('admin.filter'), false); ?></span><?php endif; ?>

        <span class="filter-count"><?php if($valueCount): ?> &nbsp;(<?php echo $valueCount; ?>) <?php endif; ?></span>
    </button>
    <?php if($scopes->isNotEmpty()): ?>
        <ul class="dropdown-menu" role="menu">
            <?php $__currentLoopData = $scopes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scope): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $scope->render(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li role="separator" class="dropdown-divider"></li>
            <li class="dropdown-item"><a href="<?php echo e($url_no_scopes, false); ?>"><?php echo e(trans('admin.cancel'), false); ?></a></li>
        </ul>
        <button type="button" class="btn btn-primary" data-toggle="dropdown" style="border-left: 0">
            <?php if($current_label): ?> <span><?php echo e($current_label, false); ?>&nbsp;</span><?php endif; ?> <i class="feather icon-chevron-down"></i>
        </button>
    <?php endif; ?>
</div>

<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/filter/button.blade.php ENDPATH**/ ?>