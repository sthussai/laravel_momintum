<?php $__env->startSection('content'); ?>



<div class='w3-container  '>
<h1> Momintum Users</h1>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

        <a class="w3-col w3-row-padding l4 m6 s12 w3-margin-bottom " >
          <div class='w3-container w3-padding l4 s6 w3-card w3-button w3-block'>
            <img src="https://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-left " style=" width:85px">
            <div class="w3-container w3-col l8 s6 " >User Id: <?php echo e($user->id); ?> <br>
          <b>Name: <?php echo e($user->name); ?></b>
          <br>Email: <?php echo e($user->email); ?>

          </div>

          </div>



        </a>   

    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.momintum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/momintum/musers.blade.php ENDPATH**/ ?>