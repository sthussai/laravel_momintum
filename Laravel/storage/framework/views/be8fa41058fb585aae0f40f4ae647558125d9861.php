<?php $__env->startSection('content'); ?>


<div class='w3-card w3-content w3-padding-large'>

<form action="/updatebillinginfo" method="post" id="">
<?php echo csrf_field(); ?>
<?php echo method_field('PATCH'); ?>




<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="name" type="text" placeholder="Name on Card" value="<?php echo e($customer->name); ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-address-card-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="address" type="text" placeholder="Address" <?php if(isset($customer->address->line1)): ?> value="<?php echo e($customer->address->line1); ?>" <?php endif; ?>>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge w3-hide-small fa fa-institution"></i></div>


    <div class="w3-quarter w3-margin-right">
      <input class="w3-input w3-border w3-margin-bottom" name="city" type="text" placeholder="City" <?php if(isset($customer->address->line1)): ?> value="<?php echo e($customer->address->city); ?>" <?php endif; ?>>
    </div>
    <div class="w3-quarter w3-margin-right">
      <input class="w3-input w3-border w3-margin-bottom" name="state" type="text" placeholder="State" <?php if(isset($customer->address->line1)): ?> value="<?php echo e($customer->address->state); ?>" <?php endif; ?>"> 
    </div>
    
</div>




<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Email" value="<?php echo e($customer->email); ?>">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone" value="<?php echo e($customer->phone); ?>">
    </div>
</div>


<button class='w3-button w3-section w3-blue w3-ripple'>Update Billing Information</button>
</form>



</div>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('payments.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/payer/edit_billing_info.blade.php ENDPATH**/ ?>