<?php if($breadcrumb): ?>
    <div class="breadcrumb-wrapper col-12">
    <ol class="breadcrumb float-right text-capitalize">
        <li class="breadcrumb-item"><a href="<?php echo e(admin_url('/'), false); ?>"><i class="fa fa-dashboard"></i> <?php echo e(admin_trans('admin.home'), false); ?></a></li>
        <?php $__currentLoopData = $breadcrumb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->last): ?>
                <li class="active breadcrumb-item">
                    <?php if(\Illuminate\Support\Arr::has($item, 'icon')): ?>
                        <i class="fa <?php echo e($item['icon'], false); ?>"></i>
                    <?php endif; ?>
                    <?php echo e($item['text'], false); ?>

                </li>
            <?php else: ?>
                <li class="breadcrumb-item">
                    <a href="<?php echo e(admin_url(\Illuminate\Support\Arr::get($item, 'url')), false); ?>">
                        <?php if(\Illuminate\Support\Arr::has($item, 'icon')): ?>
                            <i class="fa <?php echo e($item['icon'], false); ?>"></i>
                        <?php endif; ?>
                        <?php echo e($item['text'], false); ?>

                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
    </div>
<?php elseif(config('admin.enable_default_breadcrumb')): ?>
    <div class="breadcrumb-wrapper col-12">
    <ol class="breadcrumb float-right text-capitalize">
        <li class="breadcrumb-item"><a href="<?php echo e(admin_url('/'), false); ?>"><i class="fa fa-dashboard"></i> <?php echo e(admin_trans('admin.home'), false); ?></a></li>
        <?php for($i = 2; $i <= ($len = count(Request::segments())); $i++): ?>
            <li class="breadcrumb-item">
                <?php if($i == $len): ?> <a href=""> <?php endif; ?>
                <?php echo e(admin_trans_label(Request::segment($i)), false); ?>

                <?php if($i == $len): ?> </a> <?php endif; ?>
            </li>
        <?php endfor; ?>
    </ol>
    </div>
<?php endif; ?>

<div class="clearfix"></div>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/partials/breadcrumb.blade.php ENDPATH**/ ?>