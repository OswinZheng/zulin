<?php if($inline): ?>
<div class="d-flex flex-wrap">
<?php endif; ?>

<?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="vs-checkbox-con vs-checkbox-<?php echo e($style, false); ?>" style="margin-right: <?php echo e($right, false); ?>">
        <input <?php echo in_array($k, $disabled) ? 'disabled' : ''; ?> value="<?php echo e($k, false); ?>" <?php echo $attributes; ?> <?php echo (in_array($k, $checked)) ? 'checked' : ''; ?>>
        <span class="vs-checkbox vs-checkbox-<?php echo e($size, false); ?>">
          <span class="vs-checkbox--check">
            <i class="vs-icon feather icon-check"></i>
          </span>
        </span>
        <?php if($label !== null && $label !== ''): ?>
        <span><?php echo $label; ?></span>
        <?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if($inline): ?>
</div>
<?php endif; ?><?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/widgets/checkbox.blade.php ENDPATH**/ ?>