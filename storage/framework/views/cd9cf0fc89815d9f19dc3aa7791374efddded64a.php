<script>Dcat.wait();</script>

<style>
    .form-content .row {
        margin-right: 0;
        margin-left: 0;
    }
</style>


<?php $__env->startSection('content'); ?>
    <section class="form-content"><?php echo $content; ?></section>
<?php $__env->stopSection(); ?>

<?php echo Dcat\Admin\Admin::asset()->cssToHtml(); ?>

<?php echo Dcat\Admin\Admin::asset()->jsToHtml(); ?>


<?php echo Dcat\Admin\Admin::asset()->styleToHtml(); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo Dcat\Admin\Admin::asset()->scriptToHtml(); ?>

<div class="extra-html"><?php echo Dcat\Admin\Admin::html(); ?></div>


<style>.select2-dropdown {z-index: 99999999999}</style>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/layouts/form-content.blade.php ENDPATH**/ ?>