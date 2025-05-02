<div class="dcat-box custom-data-table">
    <?php echo $__env->make('admin::grid.table-toolbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $grid->renderFilter(); ?>


    <?php echo $grid->renderHeader(); ?>


    <div class="table-responsive table-wrapper <?php echo e($grid->option('table_collapse') ? 'table-collapse' : '', false); ?>">
        <div class="tables-container">
            <div class="table-wrap table-main" data-height="<?php echo e($tableHeight, false); ?>">
                <table class="custom-data-table <?php echo e($grid->formatTableClass(), false); ?>" id="<?php echo e($tableId, false); ?>">
                    <thead>
                    <?php if($headers = $grid->getVisibleComplexHeaders()): ?>
                        <tr>
                            <?php $__currentLoopData = $headers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $header->render(); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <?php $__currentLoopData = $grid->getVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th <?php echo $column->formatTitleAttributes(); ?>><?php echo $column->getLabel(); ?><?php echo $column->renderHeader(); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                    </thead>

                    <?php if($grid->hasQuickCreate()): ?>
                        <?php echo $grid->renderQuickCreate(); ?>

                    <?php endif; ?>

                    <tbody>
                    <?php $__currentLoopData = $grid->rows(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr <?php echo $row->rowAttributes(); ?>>
                            <?php $__currentLoopData = $grid->getVisibleColumnNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td <?php echo $row->columnAttributes($name); ?>>
                                    <?php echo $row->column($name); ?>

                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($grid->rows()->isEmpty()): ?>
                        <tr>
                            <td colspan="<?php echo count($grid->getVisibleColumnNames()); ?>">
                                <div style="margin:5px 0 0 10px;"><span class="help-block" style="margin-bottom:0"><i class="feather icon-alert-circle"></i>&nbsp;<?php echo e(trans('admin.no_data'), false); ?></span></div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <?php if($grid->leftVisibleColumns()->isNotEmpty() || $grid->leftVisibleComplexColumns()->isNotEmpty()): ?>
                <div class="table-wrap table-fixed table-fixed-left" data-height="<?php echo e($tableHeight, false); ?>">
                    <table class="custom-data-table <?php echo e($grid->formatTableClass(), false); ?> ">
                        <thead>

                        <?php if($grid->getVisibleComplexHeaders()): ?>
                            <tr>
                                <?php $__currentLoopData = $grid->leftVisibleComplexColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $header->render(); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                            <?php $__currentLoopData = $grid->leftVisibleComplexColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($header->getColumnNames()->count() > 1): ?>
                                    <?php $__currentLoopData = $header->columns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th <?php echo $column->formatTitleAttributes(); ?>><?php echo $column->getLabel(); ?><?php echo $column->renderHeader(); ?></th>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <?php $__currentLoopData = $grid->leftVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <th <?php echo $column->formatTitleAttributes(); ?>><?php echo $column->getLabel(); ?><?php echo $column->renderHeader(); ?></th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endif; ?>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $grid->rows(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr <?php echo $row->rowAttributes(); ?>>
                                <?php $__currentLoopData = $grid->leftVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td <?php echo $row->columnAttributes($column->getName()); ?>>
                                        <?php echo $row->column($column->getName()); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>

            <?php if($grid->rightVisibleColumns()->isNotEmpty() || $grid->rightVisibleComplexColumns()->isNotEmpty()): ?>
                <div class="table-wrap table-fixed table-fixed-right" data-height="<?php echo e($tableHeight, false); ?>">
                    <table class="custom-data-table <?php echo e($grid->formatTableClass(), false); ?> ">
                        <thead>
                        <?php if($grid->getVisibleComplexHeaders()): ?>
                            <tr>
                                <?php $__currentLoopData = $grid->rightVisibleComplexColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $header->render(); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                            <tr>
                            <?php $__currentLoopData = $grid->rightVisibleComplexColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($header->getColumnNames()->count() > 1): ?>
                                    <?php $__currentLoopData = $header->columns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <th <?php echo $column->formatTitleAttributes(); ?>><?php echo $column->getLabel(); ?><?php echo $column->renderHeader(); ?></th>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <?php $__currentLoopData = $grid->rightVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <th <?php echo $column->formatTitleAttributes(); ?>><?php echo $column->getLabel(); ?><?php echo $column->renderHeader(); ?></th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endif; ?>

                        </thead>

                        <tbody>

                        <?php $__currentLoopData = $grid->rows(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr <?php echo $row->rowAttributes(); ?>>
                                <?php $__currentLoopData = $grid->rightVisibleColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td <?php echo $row->columnAttributes($column->getName()); ?>>
                                        <?php echo $row->column($column->getName()); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php echo $grid->renderFooter(); ?>


    <?php echo $grid->renderPagination(); ?>

</div>
<?php /**PATH /Users/oswinzheng/Library/Containers/com.tencent.xinWeChat/Data/Library/Application Support/com.tencent.xinWeChat/2.0b4.0.9/6366c919cec32f7eeb98fa2ba5537de0/Message/MessageTemp/8a4f9df1aa08db2aed7fcef31ecf8be4/File/源码/vendor/dcat/laravel-admin/src/../resources/views/grid/fixed-table.blade.php ENDPATH**/ ?>