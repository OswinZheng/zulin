<?php if($grid->allowToolbar()): ?>
    <div class="custom-data-table-header">
        <div class="table-responsive">
            <div class="top d-block clearfix p-0">
                <?php if(!empty($title)): ?>
                    <h4 class="pull-left" style="margin:5px 10px 0;">
                        <?php echo $title; ?>&nbsp;
                        <?php if(!empty($description)): ?>
                            <small><?php echo $description; ?></small>
                        <?php endif; ?>
                    </h4>
                    <div class="pull-right" data-responsive-table-toolbar="<?php echo e($tableId, false); ?>">
                        <?php echo $grid->renderTools(); ?>

                        <?php echo $grid->renderColumnSelector(); ?>

                        <?php echo $grid->renderCreateButton(); ?>

                        <?php echo $grid->renderExportButton(); ?>

                        <?php echo $grid->renderQuickSearch(); ?>

                    </div>
                <?php else: ?>
                    <?php echo $grid->renderTools(); ?>  <?php echo $grid->renderQuickSearch(); ?>


                    <div class="pull-right" data-responsive-table-toolbar="<?php echo e($tableId, false); ?>">
                        <?php echo $grid->renderColumnSelector(); ?>

                        <?php echo $grid->renderCreateButton(); ?>

                        <?php echo $grid->renderExportButton(); ?>

                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?><?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/grid/table-toolbar.blade.php ENDPATH**/ ?>