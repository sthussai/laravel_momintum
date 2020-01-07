<?php $__env->startSection('title','Create'); ?>

<?php $__env->startSection('content'); ?>

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/eventregisters">Home</a>           
                    <a class="w3-btn " href="/eventregisters/create">Register For New Event</a>

                </div>


<form action="/eventregister" method='POST' class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<?php echo e(csrf_field()); ?>



 

<div class="w3-row w3-section">
<div class='w3-container'><h2 class="w3-center w3-padding "> Register For Event: <?php echo e($event->name); ?></h2>
<p >Event Cost: <?php echo e($event->cost); ?></p>
<p class='w3-left'>Event Details: <?php echo e($event->description); ?></p><br>

</div>
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" required name="name" type="text" placeholder="Name" value="<?php echo e(Auth::user()->name); ?>">
      <input class="w3-input w3-border w3-disabled" type="hidden" name="event_id" value="<?php echo e($event->id); ?>">
      <input class="w3-input w3-border w3-disabled" type="hidden" name="event_name" value="<?php echo e($event->name); ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email" value="<?php echo e(Auth::user()->email); ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone" >
    </div>
</div>




<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Send </button>
</p>
</form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.momintum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/eventregister/create.blade.php ENDPATH**/ ?>