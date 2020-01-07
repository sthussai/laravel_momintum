<?php if($paginator->hasPages()): ?>
    <div class="pagination w3-bar w3-padding" role="navigation">
        
        <?php if($paginator->onFirstPage()): ?>
            <div class="page-item disabled w3-bar-item" aria-disabled="true" aria-label="<?php echo app('translator')->getFromJson('pagination.previous'); ?>">
                <span class="page-link w3-disabled w3-btn" aria-hidden="true">First Page</span>
            </div>
        <?php else: ?>
            <div class="page-item w3-bar-item">
                <a class="page-link w3-btn " href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" aria-label="<?php echo app('translator')->getFromJson('pagination.previous'); ?>"> &lsaquo; Previous</a>
            </div>
        <?php endif; ?>

<!--         
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <div class="page-item w3-bar-item  disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></div>
            <?php endif; ?> -->

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <div class="page-item w3-bar-item active" aria-current="page"><span class="page-link w3-btn"><?php echo e($page); ?></span></div>
                    <?php else: ?>
                        <div class="page-item w3-bar-item "><a class="page-link w3-btn" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

        
        <?php if($paginator->hasMorePages()): ?>
            <div class="page-item w3-bar-item">
                <a class="page-link w3-btn" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" aria-label="<?php echo app('translator')->getFromJson('pagination.next'); ?>"> Next &rsaquo;</a>
            </div>
        <?php else: ?>
            <div class="page-item disabled w3-bar-item" aria-disabled="true" aria-label="<?php echo app('translator')->getFromJson('pagination.next'); ?>">
                <span class="page-link w3-disabled w3-btn" aria-hidden="true">Last Page</span>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/vendor/pagination/bootstrap-4.blade.php ENDPATH**/ ?>