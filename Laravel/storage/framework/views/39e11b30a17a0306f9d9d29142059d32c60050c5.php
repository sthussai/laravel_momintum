<?php $__env->startSection('title','Event Registrations'); ?>

<?php $__env->startSection('content'); ?>

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/eventregister">Event Registrations</a>
                    <a class="w3-btn" href="/mprofile">Profile</a>           
                    <a class="w3-btn " href="/events">Register For New Event</a>


                </div>

<?php echo $__env->yieldContent('content1'); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.momintum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/eventregister/layout.blade.php ENDPATH**/ ?>