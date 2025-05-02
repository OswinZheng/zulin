<?php if(isset($errors) && $errors->hasBag('exception')): ?>
    <?php $error = $errors->getBag('exception'); ?>
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>
            <i class="icon fa fa-warning"></i>
            <i style="border-bottom: 1px dotted #fff;cursor: pointer;" title="<?php echo e($error->get('type')[0], false); ?>" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;"><?php echo e(class_basename($error->get('type')[0]), false); ?></i>
            In <i title="<?php echo e($error->get('file')[0], false); ?> line <?php echo e($error->get('line')[0], false); ?>" style="border-bottom: 1px dotted #fff;cursor: pointer;" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;"><?php echo e(basename($error->get('file')[0]), false); ?> line <?php echo e($error->get('line')[0], false); ?></i> :
        </h4>
        <p><a style="cursor: pointer;" onclick="$('#dcat-admin-exception-trace').toggleClass('hidden');$('i', this).toggleClass('fa-angle-double-down fa-angle-double-up');"><i class="fa fa-angle-double-down"></i>&nbsp;&nbsp;<?php echo $error->first('message'); ?></a></p>

        <p class="hidden" id="dcat-admin-exception-trace"><br><?php echo nl2br($error->first('trace')); ?></p>
    </div>
<?php endif; ?>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/partials/exception.blade.php ENDPATH**/ ?>