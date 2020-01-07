<?php $__env->startSection('content'); ?>

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/photos">Home</a>           
                    <a class="w3-btn " href="/photos/create">Create New Resturant Listing</a>

                </div>
</div>                

<div class='w3-center w3-content'>
	<div >
<h1>Resturants View
</h1></div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <?php echo e($photo->name); ?>

    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <?php echo e($photo->description); ?>

    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <?php echo e($photo->url); ?>

    </div>
</div>
<figure >
  <img class="w3-image" src="<?php echo e($photo->url); ?>">
</figure>
<a  href="/photos/<?php echo e($previousID); ?>" class="w3-button    w3-blue-grey">Previous</a>
<a  href="/photos/<?php echo e($photo->id); ?>/edit" class="w3-button w3-green">Edit</a>
<a  href="/photos/<?php echo e($nextID); ?>" class="w3-button w3-blue-grey">Next</a>
<div class='w3-margin-top'><a  href="/photos" class="w3-button w3-light-grey">Home</a></div>
</div>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.momintum", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/photos/show.blade.php ENDPATH**/ ?>