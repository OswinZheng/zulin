<div class="<?php echo e($viewClass['form-group'], false); ?>">

    <div class="<?php echo e($viewClass['label'], false); ?> control-label">
        <span><?php echo $label; ?></span>
    </div>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="input-group">

            <?php if($prepend): ?>
                <span class="input-group-prepend"><span class="input-group-text bg-white"><?php echo $prepend; ?></span></span>
            <?php endif; ?>
            <input <?php echo $attributes; ?> />

            <?php if($append): ?>
                <span class="input-group-append"><?php echo $append; ?></span>
            <?php endif; ?>
        </div>

        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div><?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/form/input.blade.php ENDPATH**/ ?>