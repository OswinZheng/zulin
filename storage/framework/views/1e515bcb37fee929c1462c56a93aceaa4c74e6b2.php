<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php if(! empty($header)): ?><?php echo e($header, false); ?> | <?php endif; ?> <?php echo e(Dcat\Admin\Admin::title(), false); ?></title>

    <?php if(! config('admin.disable_no_referrer_meta')): ?>
        <meta name="referrer" content="no-referrer"/>
    <?php endif; ?>

    <?php if(! empty($favicon = Dcat\Admin\Admin::favicon())): ?>
        <link rel="shortcut icon" href="<?php echo e($favicon, false); ?>">
    <?php endif; ?>

    <?php echo admin_section(Dcat\Admin\Admin::SECTION['HEAD']); ?>


    <?php echo Dcat\Admin\Admin::asset()->headerJsToHtml(); ?>


    <?php echo Dcat\Admin\Admin::asset()->cssToHtml(); ?>


    <style>
        #app section.content > .row {
            margin-right: 0;
        }

        #app .dcat-box {
            overflow: revert;
        }
    </style>
</head>

<body class="dcat-admin-body full-page <?php echo e($configData['body_class'], false); ?>">

<script>
    var Dcat = CreateDcat(<?php echo Dcat\Admin\Admin::jsVariables(); ?>);
    var storage = window.parent.localStorage || {
            setItem: function () {
            }, getItem: function () {
            }
        },
        key = 'dcat-admin-theme-mode',
        mode = storage.getItem(key)

    Dcat.darkMode.display(mode === 'dark');

    window.parent.$(window.parent.document).on('dark-mode.shown', function () {
        Dcat.darkMode.display(true);
    });

    window.parent.$(window.parent.document).on('dark-mode.hide', function () {
        Dcat.darkMode.display(false);
    });
</script>


<?php echo admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_BEFORE']); ?>


<div class="app-content content">
    <div class="wrapper" id="<?php echo e($pjaxContainerId, false); ?>"
         style="min-height:calc(100vh - 45px);box-sizing: border-box;padding: 1.5rem 3rem 3rem 3rem">
        <?php echo $__env->yieldContent('app'); ?>
    </div>
    <?php if(!isset(config('iframe_tab')['footer_setting']['use_menu'])||!config('iframe_tab')['footer_setting']['use_menu']): ?>
        <footer style="margin-left: 0" class="main-footer pt-1">
            <p class="clearfix blue-grey lighten-2 mb-0 text-center">
            <span class="text-center d-block d-md-inline-block mt-25">
                Powered by
                <?php if(isset(config('iframe_tab')['footer_setting'])&&config('iframe_tab')['footer_setting']['copyright']!=''): ?>
                    <a target=""
                       href="javascript:void 0"><?php echo e(config('iframe_tab')['footer_setting']['copyright'], false); ?></a>
                <?php else: ?>
                    <a target="_blank" href="https://github.com/jqhph/dcat-admin">Dcat Admin</a>
                <?php endif; ?>
                <span>&nbsp;·&nbsp;</span>
                <?php if(isset(config('iframe_tab')['footer_setting'])&&config('iframe_tab')['footer_setting']['app_version']!=''): ?>
                    v<?php echo e(config('iframe_tab')['footer_setting']['app_version'], false); ?>

                <?php else: ?>
                    v<?php echo e(Dcat\Admin\Admin::VERSION, false); ?>

                <?php endif; ?>

            </span>

                <button class="btn btn-primary btn-icon scroll-top pull-right"
                        style="position: fixed;bottom: 2%; right: 10px;display: none">
                    <i class="feather icon-arrow-up"></i>
                </button>
            </p>
        </footer>
    <?php endif; ?>
</div>

<?php echo admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_AFTER']); ?>


<?php echo Dcat\Admin\Admin::asset()->jsToHtml(); ?>


<script>Dcat.boot();</script>
<script src="<?php echo e(asset('/vendor/iframe-tab/js/extend.js'), false); ?>"></script>
</body>
</html>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/mosiboom/dcat-iframe-tab/src/resource/views/full-page.blade.php ENDPATH**/ ?>