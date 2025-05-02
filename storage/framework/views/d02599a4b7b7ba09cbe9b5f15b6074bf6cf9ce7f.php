<?php if(! empty($button['text']) || $click): ?>
    <span class="drop<?php echo e($direction, false); ?>" style="display:inline-block">
        <a id="<?php echo e($buttonId, false); ?>" class="dropdown-toggle <?php echo e($button['class'], false); ?>" style="<?php echo e($button['style'], false); ?>" data-toggle="dropdown" href="javascript:void(0)">
            <stub><?php echo $button['text']; ?></stub>
            <span class="caret"></span>
        </a>
        <ul class="dropdown-menu"><?php echo $options; ?></ul>
    </span>
<?php else: ?>
    <ul class="dropdown-menu"><?php echo $options; ?></ul>
<?php endif; ?>

<?php if($click): ?>
    <script>
        var $btn = $('#<?php echo e($buttonId, false); ?>'),
            $a = $btn.parent().find('ul li a'),
            text = String($btn.text());

        $a.on('click', function () {
            $btn.find('stub').html($(this).html() + ' &nbsp;');
        });

        if (text.replace(/(^\s*)|(\s*$)/g,"")) {
            $btn.find('stub').html(text + ' &nbsp;');
        } else {
            (!$a.length) || $btn.find('stub').html($($a[0]).html() + ' &nbsp;');
        }
    </script>
<?php endif; ?>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/widgets/dropdown.blade.php ENDPATH**/ ?>