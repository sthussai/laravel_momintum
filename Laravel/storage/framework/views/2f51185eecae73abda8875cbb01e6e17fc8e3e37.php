<?php $__env->startSection('title','Resturants Index'); ?>

<?php $__env->startSection('content'); ?>
<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/photos">Home</a>           
                    <a class="w3-btn " href="/photos/create">Create New Resturant Listing</a>

                </div>
</div>                
    <div class="w3-content w3-center w3-panel w3-card">
      <h1>All Resturants </h1>

      <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

       <!-- Start Resturant Listing 1 -->    
       <a href="/photos/<?php echo e($photo->id); ?>" class='w3-row-padding w3-content w3-large' style="solid 2px blue">
          <div class='w3-mobile w3-col l4 m5 s12' style="solid 2px red">
          <img  class='w3-image' src="<?php echo e($photo->url); ?>" style="max-height:250px;solid 2px red">
          </div>
          <div class='w3-mobile w3-col l8 m7 s12' style="margin-top:10px; solid 2px red;">
          <h3><b><?php echo e($photo->name); ?></b> <span class="w3-right w3-tag w3-dark-grey w3-round">New</span></h3>
          <p class="w3-text-grey"><?php echo e($photo->description); ?>. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          </div>
      </a>
      <!-- END Resturant Listing 1 -->      
      


      
      <hr>
      
        

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.momintum", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/photos/index.blade.php ENDPATH**/ ?>