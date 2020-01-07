<?php $__env->startSection('content'); ?>
<div class='w3-card w3-content w3-padding-large'>


<div class='w3-round w3-center w3-padding w3-card w3-light-green w3-margin-bottom '>

<?php if(session('status')): ?>
    <div class="w3-round w3-center  w3-card w3-light-green">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<?php if(isset($message)): ?>

<?php echo e($message); ?>




  <?php if($stripe_enabled === false): ?>
  <form action="/enablestripe" method="POST">
  <?php echo csrf_field(); ?>
  <button class="w3-button w3-section w3-center w3-blue-grey w3-ripple"> Enable Online Payments</button>
    
  </form>
  <?php endif; ?>

  <?php if($message == 'Subscribed to momintum!'): ?>
  <form action="/payment" method="POST">
  <?php echo method_field('DELETE'); ?>
  <?php echo csrf_field(); ?>
    <button class="w3-button w3-section w3-red w3-ripple"> Cancel Registration ?</button>
  </form>
  <?php endif; ?>

<?php endif; ?>
</div>


<!--START Account Billing Info Section -->
<?php if($stripe_enabled === true): ?>
  <div >

    <h3>Account Billing Information
      <a href="/editbillinginfo" class=' w3-right w3-button w3-small w3-light-grey w3-ripple'>Edit Billing Information</a>
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




  </div>
<!-- END Account Billing Info Section -->


    
    <h3>Payment Methods on File<a href="/addpaymentmethod" class=' w3-right w3-button w3-small w3-light-grey w3-ripple'>Add Card</a>
      </h3>

    <div class='w3-responsive' >                              
      <table  class="w3-table-all w3-hoverable ">
        <thead>
          <tr class="w3-blue-grey">
            
            <th>Card</th>
            <th>Last 4 digits</th>
            <th>Name on Card</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <?php if(@isset($cardonfile)): ?>

        <?php $__currentLoopData = $paymentMethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentMethod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

          <td><?php echo e($paymentMethod->card->brand); ?></td>
          <td><?php echo e($paymentMethod->card->last4); ?></td>
          <td><?php echo e($paymentMethod->billing_details->name); ?></td>
          
          <?php if($paymentMethod->id === $defaultPaymentMethod->id): ?>
          <td>Default Payment Method</td>
          <?php else: ?>
          <td><form method='get' action="/deletePaymentMethod/<?php echo e($paymentMethod->id); ?>">

          <button class='w3-btn w3-pale-red'>Delete Payment Method</button>
          </form></td> 
          <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr>
          <td>No Card on file</td>
        <td> 
          
          <a href='/addpaymentmethod' class='w3-btn w3-pale-green'>Add Card?</a>
          
        </td>

        </tr>

        <?php endif; ?>
        
      </table>

  </div>

  <form method='get' action="/paytest">

<button class='w3-btn w3-pale-red'>Pay One Time Invoice</button>
</form>    




<h3>View All Charges</h3>
<div class='w3-responsive' >                              
                                                      <table  class="w3-table-all w3-hoverable ">
                                                        <thead>
                                                          <tr class="w3-blue-grey">
                                                            
                                                            <th>Date</th>
                                                            <th>Amount</th>
                                                            <th>Customer</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Invoice</th>
                                                            <th>Action</th>
                                                          </tr>
                                                        </thead>
                                                        <?php $__currentLoopData = $charges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $charge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                          <td><?php echo e($charge->created); ?></td>
                                                          <td><?php echo e($charge->amount); ?></td>
                                                          <td><?php echo e($charge->customer); ?></td>
                                                          <td><?php echo e($charge->description); ?></td>
                                                          <td><?php echo e($charge->payment_intent); ?></td>
                                                          <td><?php echo e($charge->status); ?></td>

                                  
                                                  
                                                          <td>
                                                          <form method='get' action="/user/refund/<?php echo e($charge->payment_intent); ?>/<?php echo e($charge->id); ?>">
                                                          <?php echo csrf_field(); ?>
                                                          <button class='w3-btn w3-pale-red'>Cancel</button>
                                                          </form>
                                                          </td>
                                                      
                                                                
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                      </table>
    
                                      </div>



<h3>View All Invoices</h3>
<div class='w3-responsive' >                              
                                                      <table  class="w3-table-all w3-hoverable ">
                                                        <thead>
                                                          <tr class="w3-blue-grey">
                                                            
                                                            <th>Date</th>
                                                            <th>Amount</th>
                                                            <th>Customer</th>
                                                            <th>Description</th>
                                                            <th>Status</th>
                                                            <th>Invoice</th>
                                                            
                                                          </tr>
                                                        </thead>
                                                        <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                          <td><?php echo e($invoice->date()->toFormattedDateString()); ?></td>
                                                          <td><?php echo e($invoice->total()); ?></td>
                                                          <td><?php echo e($invoice->customer_email); ?></td>
                                                          <td><?php echo e($invoice->description); ?></td>
                                                          <td><?php echo e($invoice->status); ?></td>

                                                          <td><a href="/user/invoice/<?php echo e($invoice->id); ?>/<?php echo e($invoice->description); ?>" class='w3-blue-grey w3-padding'>Download</a></td>

                                                        
                                                                
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                      </table>
    
                                      </div>




</div>
<?php endif; ?>



<?php if($stripe_enabled === true): ?>
<h3>View Refunds</h3>
<div >                              
                                                      <table  class="w3-table-all w3-hoverable ">
                                                        <thead>
                                                          <tr class="w3-blue-grey">
                                                            
                                                            <th>Payment Intent ID</th>
                                                            <th>Charge ID</th>
                                                            <th>Refund Amount</th>
                                                            <th>Customer</th>


                                                     
                                                          </tr>
                                                        </thead>  
                                                        <?php $__currentLoopData = $refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refund): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                          <td><?php echo e($refund->payment_intent); ?></td>
                                                          <td><?php echo e($refund->charge); ?></td>
                                                          <td><?php echo e($refund->amount); ?></td>
                                                          <td><?php echo e($refund->charge); ?></td>
                                                                
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                      </table>
    
                                      </div>


</div>

<?php endif; ?>


<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer>


</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('payments.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/payments/index.blade.php ENDPATH**/ ?>