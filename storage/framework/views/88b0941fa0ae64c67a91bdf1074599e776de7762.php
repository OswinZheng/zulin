<style>
    .filter-box {
        border-top: 1px solid #eee;
        margin-top: 10px;
        margin-bottom: -.5rem!important;
        padding: 1.8rem;
    }
</style>

<div class="filter-box shadow-0 card mb-0 <?php echo e($expand ? '' : 'd-none', false); ?> <?php echo e($containerClass, false); ?>">
    <div class="card-body" style="<?php echo $style; ?>"  id="<?php echo e($filterID, false); ?>">
        <form action="<?php echo $action; ?>" class="form-horizontal grid-filter-form" pjax-container method="get">
            <div class="row mb-0">
                <?php $__currentLoopData = $layout->columns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $column->filters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $filter->render(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <button class="btn btn-primary btn-sm btn-mini submit" style="margin-left: 12px">
                    <i class="feather icon-search"></i><span class="d-none d-sm-inline">&nbsp;&nbsp;<?php echo e(trans('admin.search'), false); ?></span>
                </button>

                <?php if(!$disableResetButton): ?>
                <a style="margin-left: 6px" href="<?php echo $action; ?>" class="reset btn btn-white btn-sm ">
                    <i class="feather icon-rotate-ccw"></i><span class="d-none d-sm-inline">&nbsp;&nbsp;<?php echo e(trans('admin.reset'), false); ?></span>
                </a>
                <?php endif; ?>
            </div>

        </form>
    </div>
</div>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/filter/container.blade.php ENDPATH**/ ?>