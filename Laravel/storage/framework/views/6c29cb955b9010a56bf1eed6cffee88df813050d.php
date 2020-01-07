<?php $__env->startSection('content1'); ?>



    <div class="w3-content w3-center w3-panel w3-card">
      <h1>All Events </h1>

      <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <a href="/events/<?php echo e($event->id); ?>" class="w3-card  w3-block w3-hover-shadow w3-margin-bottom">
      <div style="border: solid 2px darkgrey" class=' w3-content w3-padding-16 w3-display-container'>
        <?php echo e($event->name); ?><br>Cost: $<?php echo e($event->cost); ?>

       
        
      </div>
      </a>
              

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("events.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/events/index.blade.php ENDPATH**/ ?>