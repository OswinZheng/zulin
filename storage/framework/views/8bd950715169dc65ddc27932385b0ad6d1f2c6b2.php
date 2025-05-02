<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo e(Dcat\Admin\Admin::title(), false); ?> <?php if(! empty($header)): ?> | <?php echo e($header, false); ?><?php endif; ?></title>

    <?php if(! config('admin.disable_no_referrer_meta')): ?>
        <meta name="referrer" content="no-referrer"/>
    <?php endif; ?>

    <?php if(! empty($favicon = Dcat\Admin\Admin::favicon())): ?>
        <link rel="shortcut icon" href="<?php echo e($favicon, false); ?>">
    <?php endif; ?>

    <?php echo admin_section(Dcat\Admin\Admin::SECTION['HEAD']); ?>


    <?php echo Dcat\Admin\Admin::asset()->headerJsToHtml(); ?>


    <?php echo Dcat\Admin\Admin::asset()->cssToHtml(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('/vendor/iframe-tab/css/swiper.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/vendor/iframe-tab/css/style.css'), false); ?>">
</head>



<?php echo $__env->make('iframe-tab::vertical', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/mosiboom/dcat-iframe-tab/src/resource/views/page.blade.php ENDPATH**/ ?>