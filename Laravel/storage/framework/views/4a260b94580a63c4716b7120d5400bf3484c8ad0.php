  


<?php $__env->startSection('content'); ?>

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/events">Home</a>           
                    <a class="w3-btn " href="/events/create">Create New Event</a>

                </div>
<div>
	
  <div class='w3=content'>
  
<h1><?php echo e($event->name); ?>

</h1>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest"> Cost: $
      <?php echo e($event->cost); ?>

    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">Description: 
      <?php echo e($event->description); ?>

    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <?php echo e($event->start_date); ?>

    </div>
</div>
<figure >
  <img class="w3-image" src="<?php echo e($event->url); ?>">
</figure>

<div class='w3-container'>
    <h3 class="w3-rest">Event Registrations</h3>

<hr>
    <?php $__empty_1 = true; $__currentLoopData = $eventregisters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventregister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 

        <a href='/eventregister/<?php echo e($eventregister->id); ?>' class="w3-col w3-row-padding l4 m6 s12 w3-margin-bottom " >
          <div class='w3-container w3-padding l4 s6 w3-card w3-button w3-block'>
            <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
            <div class="w3-container w3-col l8 s6 " >Event Register Id: <?php echo e($eventregister->id); ?> <br>
          <b>Name: <?php echo e($eventregister->name); ?></b>
          <br>Email: <?php echo e($eventregister->email); ?>

          <br>Registered: <?php echo e($eventregister->created_at); ?>

          <br>Status: <?php echo e($eventregister->status); ?>

          </div>

          </div>



        </a>   
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h5 class=' w3-padding'>No current event registrations</h5>
        <?php endif; ?>
</div>
<a  href="/events/<?php echo e($previousID); ?>" class="w3-button    w3-blue-grey">Previous</a>
<a  href="/events/<?php echo e($event->id); ?>/edit" class="w3-button w3-green">Edit</a>
<a  href="/eventregister/create/<?php echo e($event->id); ?>" class="w3-button w3-green">Register</a>
<a  href="/events/<?php echo e($nextID); ?>" class="w3-button w3-blue-grey">Next</a>
<div class='w3-margin-top'><a  href="/events" class="w3-button w3-light-grey">Home</a></div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.momintum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/events/show.blade.php ENDPATH**/ ?>