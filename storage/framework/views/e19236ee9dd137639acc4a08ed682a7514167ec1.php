<body
        class="dcat-admin-body sidebar-mini layout-fixed <?php echo e($configData['body_class'], false); ?> <?php echo e($configData['sidebar_class'], false); ?>

        <?php echo e($configData['navbar_class'] === 'fixed-top' ? 'navbar-fixed-top' : '', false); ?> ">

<script>
    var Dcat = CreateDcat(<?php echo Dcat\Admin\Admin::jsVariables(); ?>);
</script>
<?php echo admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_BEFORE']); ?>

<div class="wrapper">
    
    <?php echo $__env->make('admin::partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin::partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="app-content content">
        <input type="hidden" id="iframe_tab_cache" value="
       <?php if(isset(config('admin.layout')['iframe_tab_cache'])): ?>
        <?php echo e(config('admin.layout')['iframe_tab_cache'], false); ?>

        <?php else: ?>
        <?php echo e(config('iframe_tab.cache')?1:0, false); ?>

        <?php endif; ?>
                ">
        <input type="hidden" id="iframe_tab_lazy_load" value="
       <?php if(isset(config('admin.layout')['iframe_tab_lazy_load'])): ?>
        <?php echo e(config('admin.layout')['iframe_tab_lazy_load'], false); ?>

        <?php else: ?>
        <?php echo e(config('iframe_tab.lazy_load')?1:0, false); ?>

        <?php endif; ?>
                ">
        <input type="hidden" id="use_id" value="<?php echo e(Admin::user()->id, false); ?>">
        
        <div class="mouse-click-menu">
            <ul>
                <li><a href="javascript:;" class="menu-item tab-close-all">关闭所有标签页</a></li>
                <li><a href="javascript:;" class="menu-item tab-close-other">关闭其他标签页</a></li>
                <li><a href="javascript:;" class="menu-item tab-refresh">刷新当前标签页</a></li>
                <?php if(isset(config('admin.layout')['iframe_tab_cache'])&&config('admin.layout')['iframe_tab_cache']==1): ?>
                    <li><a href="javascript:;" class="menu-item tab-clear-cache">清空标签页缓存</a></li>
                <?php else: ?>
                    <?php if(config('iframe_tab.cache')): ?>
                        <li><a href="javascript:;" class="menu-item tab-clear-cache">清空标签页缓存</a></li>
                    <?php endif; ?>
                <?php endif; ?>

                <li class="li_separate"></li>
                <li><a href="javascript:;" class="menu-item tab-copy-link">复制标签页链接</a></li>
                <li><a href="javascript:;" class="menu-item tab-open-link">新标签页中打开</a></li>
            </ul>
        </div>
        <div
                class="iframe-tab-container <?php echo e(mosi_iframeTabBodyClass(config('admin.layout')['body_class']), false); ?>"
                id="iframe-tab-container">
            <div class="swiper-container">
                <ul class="nav nav-pills mb-3 swiper-wrapper" id="iframe-tab" role="tablist"></ul>
            </div>
            <div class="swiper-button-prev"><i class="fa fa-angle-double-left"></i></div>
            <div class="swiper-button-next"><i class="fa fa-angle-double-right"></i></div>
        </div>
        <div class="content-wrapper iframe-tab-wrapper" id="<?php echo e($pjaxContainerId, false); ?>">
            <?php echo $__env->yieldContent('app'); ?>
        </div>
    </div>
</div>
<div id="footer-template" style="display: none">
    <div
            style="text-align:center;width: 100%;position: absolute;bottom: 0;height: 45px;line-height: 45px;background: #efefef">
        <span class="text-center d-block d-md-inline-block mt-25">
                &copy;
                <?php if(isset(config('iframe_tab')['footer_setting'])&&config('iframe_tab')['footer_setting']['copyright']!=''): ?>
                <a target=""
                   href="javascript:void 0"><?php echo e(config('iframe_tab')['footer_setting']['copyright'], false); ?></a>
            <?php else: ?>
                <a target="_blank" href="https://github.com/jqhph/dcat-admin">Dcat Admin</a>
            <?php endif; ?>
                <span>&nbsp;·&nbsp;</span>
                <?php echo e(date('Y'), false); ?>

        </span>
    </div>

</div>

<?php echo admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_AFTER']); ?>


<?php echo Dcat\Admin\Admin::asset()->jsToHtml(); ?>


<script>Dcat.boot();</script>
<script src="<?php echo e(asset('/vendor/iframe-tab/js/md5.js'), false); ?>"></script>
<script src="<?php echo e(asset('/vendor/iframe-tab/js/swiper.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('/vendor/iframe-tab/js/base.js'), false); ?>"></script>
<script src="<?php echo e(asset('/vendor/iframe-tab/js/extend.js'), false); ?>"></script>
<?php if(isset(config('iframe_tab')['footer_setting']['use_menu'])&&config('iframe_tab')['footer_setting']['use_menu']==true): ?>
    <script>
        let html = $('#footer-template').html()
        $('.main-sidebar').append(html);
    </script>
<?php endif; ?>
</body>

</html>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/mosiboom/dcat-iframe-tab/src/resource/views/vertical.blade.php ENDPATH**/ ?>