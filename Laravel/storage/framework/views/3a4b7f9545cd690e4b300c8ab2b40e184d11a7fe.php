<?php $__env->startSection('content'); ?>

                    <!-- <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?> -->
                    <div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/photos">Home</a>           
                    <a class="w3-btn " href="/photos/create">Create New Resturant</a>

                </div>
</div>                

<h3 class='w3-center'>Edit Resturant</h3>

<div>
<form action="/photos/<?php echo e($photo->id); ?>" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">

<?php echo e(method_field('PATCH')); ?>

<?php echo e(csrf_field()); ?>




 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" required name="name" type="text" placeholder="Edit Name" value="<?php echo e($photo->name); ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="description" type="text" placeholder="Edit Description" value="<?php echo e($photo->description); ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="url" type="text" placeholder="Edit URl" value="<?php echo e($photo->url); ?>">
    </div>
</div>


<p class="w3-center">
<button class="w3-button w3-section w3-green w3-ripple"> Update </button>
</p>
</form>

<form action="/photos/<?php echo e($photo->id); ?>" method="POST">
<?php echo method_field('DELETE'); ?>
<?php echo csrf_field(); ?>
  <button class="w3-button w3-section w3-red w3-ripple"> Delete <?php echo e($photo->name); ?>?</button>
</form>


</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.momintum", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/photos/edit.blade.php ENDPATH**/ ?>