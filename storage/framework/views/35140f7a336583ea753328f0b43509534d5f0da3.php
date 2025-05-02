<?php if($showHeader): ?>
    <div class="box-header with-border mb-1" style="padding: .65rem 1rem">
        <h3 class="box-title" style="line-height:30px"><?php echo $form->title(); ?></h3>
        <div class="pull-right"><?php echo $form->renderTools(); ?></div>
    </div>
<?php endif; ?>
<div class="box-body" <?php echo $tabObj->isEmpty() && !$form->hasRows() ? 'style="margin-top: 6px"' : ''; ?> >
    <?php if(!$tabObj->isEmpty()): ?>
        <?php echo $__env->make('admin::form.tab', compact('tabObj', 'form'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <div class="fields-group">
            <?php echo $__env->make('admin::form.fields', ['rows' => $form->rows(), 'fields' => $form->fields(), 'layout' => $form->layout()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endif; ?>
</div>
<?php echo $form->renderFooter(); ?>


<?php echo $form->renderHiddenFields(); ?>

<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/form/container.blade.php ENDPATH**/ ?>