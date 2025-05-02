<div class="<?php echo e($viewClass['form-group'], false); ?>" style="margin-top: .3rem">
    <label class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo $label; ?></label>
    <div class="<?php echo e($viewClass['field'], false); ?>">
        <div class="box box-solid box-default no-margin">
            <div class="box-body">
                <div class="<?php echo e($class, false); ?>"><?php echo $value; ?>&nbsp;</div>
            </div>
        </div>

        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/form/display.blade.php ENDPATH**/ ?>