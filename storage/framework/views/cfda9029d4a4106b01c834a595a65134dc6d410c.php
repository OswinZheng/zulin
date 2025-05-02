<?php if($rows): ?>
    <div class="ml-2 mb-2 mr-2" style="margin-top: -0.5rem">
        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $row->render(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($field instanceof Dcat\Admin\Form\Field\Hidden): ?>
                <?php echo $field->render(); ?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php elseif($layout->hasColumns()): ?>
    <?php echo $layout->build(); ?>

<?php else: ?>
    <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $field->render(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/form/fields.blade.php ENDPATH**/ ?>