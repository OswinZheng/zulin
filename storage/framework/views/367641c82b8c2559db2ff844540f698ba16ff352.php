<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin::partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin::partials.exception', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $content; ?>


    <?php echo $__env->make('admin::partials.toastr', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('app'); ?>
    <?php echo Dcat\Admin\Admin::asset()->styleToHtml(); ?>

    <div class="content-body" style="position: relative;width: 100%;height: 100%" id="app">
        
        <?php echo admin_section(Dcat\Admin\Admin::SECTION['APP_INNER_BEFORE']); ?>

        <div class="tab-content" id="iframe-tabContent"></div>

        
        <?php echo admin_section(Dcat\Admin\Admin::SECTION['APP_INNER_AFTER']); ?>

    </div>

    <?php echo Dcat\Admin\Admin::asset()->scriptToHtml(); ?>

    <?php echo Dcat\Admin\Admin::html(); ?>

<?php $__env->stopSection(); ?>

<?php if(! request()->pjax()): ?>
    <?php echo $__env->make('iframe-tab::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
    <title><?php echo e(Dcat\Admin\Admin::title(), false); ?> <?php if($header): ?> | <?php echo e($header, false); ?><?php endif; ?></title>

    <script>
        try {
            Dcat.pjaxResponded();
        }catch (e) {
            Dcat.wait();
        }
    </script>

    <?php echo Dcat\Admin\Admin::asset()->cssToHtml(); ?>

    <?php echo Dcat\Admin\Admin::asset()->jsToHtml(); ?>


    <?php echo $__env->yieldContent('app'); ?>
<?php endif; ?>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/mosiboom/dcat-iframe-tab/src/resource/views/content.blade.php ENDPATH**/ ?>