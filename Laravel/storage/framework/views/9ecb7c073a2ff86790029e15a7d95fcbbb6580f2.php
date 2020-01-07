<?php $__env->startSection('content1'); ?>



    <div class="w3-content w3-center w3-panel w3-card">
      <h1>All Events Registrations</h1>

      <?php $__currentLoopData = $eventregisters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventregister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <a href="/eventregister/<?php echo e($eventregister->id); ?>" class=" w3-row-padding w3-card  w3-block w3-hover-shadow w3-margin-bottom">
          <div class='w3-col m3 s12 w3-padding-16'>
          <br> <?php echo $eventregister->status; ?>  <hr>
          <p class='w3-center'><img src='https://www.w3schools.com/w3images/avatar2.png' class='w3-image' style='max-height: 100px' alt='Avatar'></p>
          </div>
          <div  class='w3-col m9 s12 w3-padding-16 w3-center'>

        <b>Event Registration ID: <?php echo e($eventregister->id); ?></b><br>
        Name: <?php echo e($eventregister->name); ?><br>
        User ID: <?php echo e($eventregister->owner_id); ?><br>
        Email: <?php echo e($eventregister->email); ?><br>
        Phone: <?php echo e($eventregister->phone); ?><br>
        Event ID: <?php echo e($eventregister->event_id); ?><br>
        Event Name: <?php echo e($eventregister->event_name); ?><br>
        Created: <?php echo e($eventregister->created_at); ?><br>
       
        
      </div>
      </a>
              

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("eventregister.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/eventregister/index.blade.php ENDPATH**/ ?>