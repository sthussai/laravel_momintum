




    

<h3>Account Billing Information
<a href="/editbillinginfo" class=' w3-right w3-button w3-small w3-light-grey w3-ripple'>Update Billing Information</a>
</h3>


<div class="w3-row w3-section">

    <div class="">
    <!-- <p class="w3-input " name="id">Customer ID: <?php echo e($customer->id); ?></p> --> 
    <p class="w3-input " name="first">Name on Card: <?php echo e($customer->name); ?></p> 
    <p class="w3-input " name="last" type="text" placeholder="">
      Address: <?php if(isset($customer->address->line1)): ?> <?php echo e($customer->address->line1); ?> 
      <?php echo e($customer->address->city); ?> <?php echo e($customer->address->state); ?>  
      <?php endif; ?> 
      </p>
    <p class="w3-input " name="email" type="text" >Email: <?php echo e($customer->email); ?></p> 
    <p class="w3-input " name="phone" type="text" placeholder="">Phone: <?php echo e($customer->phone); ?></p>
    </div>
</div>






<?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/payer/sections/payer_info_section.blade.php ENDPATH**/ ?>