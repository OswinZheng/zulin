<?php if(Session::has('dcat-admin-toastr')): ?>
    <?php
        $toastr  = Session::get('dcat-admin-toastr');
        $type    = $toastr->get('type')[0] ?? 'success';
        $message = $toastr->get('message')[0] ?? '';
        $options = admin_javascript_json($toastr->get('options', []));
    ?>
    <script>$(function () { toastr.<?php echo e($type, false); ?>('<?php echo $message; ?>', null, <?php echo $options; ?>); })</script>
<?php endif; ?><?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/partials/toastr.blade.php ENDPATH**/ ?>