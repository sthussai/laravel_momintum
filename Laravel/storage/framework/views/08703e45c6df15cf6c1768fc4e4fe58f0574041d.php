  


<?php $__env->startSection('content'); ?>

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/eventregister">Home</a>           
                    <a class="w3-btn " href="/events/create">Create New Event</a>

                </div>
<div>

<div class='w3-content'>
	<div >
<h1>Registration for Event: <?php echo e($event->name); ?>

<span class='w3-right w3-small'>Event Registration ID:<?php echo e($eventregister->id); ?></span>
</h1></div>

<div class="w3-row w3-section">

    <div class="w3-rest">
    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-" style="height:100px;width:100px" alt="Avatar"><br><br>

      Participant name: <?php echo e($eventregister->name); ?>

    </div>
</div>

<div class="w3-row w3-section">

    <div class="w3-rest">Event Description:
      <?php echo e($event->description); ?>

    </div>
</div>

<div class="w3-row w3-section">

    <div class="w3-rest">Event Cost: $
      <?php echo e($event->cost); ?>

    </div>
</div>


<div class="w3-row w3-section">

    <div class="w3-rest w3-card-4 w3-large w3-padding-large">Registration Status: 
      <?php echo $eventregister->status; ?>

      <hr>
<?php if($showform): ?>
      <form action="/eventregister/confirm/<?php echo e($eventregister->id); ?>" method='post'>
      <?php echo csrf_field(); ?>
      <div class='w3-medium w3-padding'>To confirm registration, please select from the options below: 
            <div>      <br> 
            <input class="w3-radio" type="radio" name="status" value="Confirmed: Pending payment online" >
            <label>I would like to pay securely online.</label>
            </div>
            <div>
            <input class="w3-radio" type="radio" name="status" value="Confirmed: will pay in person">
            <label>I would like to pay in person.</label>
            </div>
            <div>
            <input class="w3-radio" type="radio" name="status" value="Cancelled">
            <label>I would like to cancel my registration.</label>
            </div>
            <button class="w3-button w3-section w3-light-green w3-ripple"> Submit confirmation</button>
      </div>
      
      </form>
<?php endif; ?>      

    </div>
</div>

        <div class='w3-margin-top'>
        <?php if($online): ?>
          <button onclick="openModal()" class="w3-button    w3-blue-grey">Proceed to Payment</button>
        <?php endif; ?>
<!--              START modal section -->
<script>
                          function openModal(){
                              document.getElementById('id01').style.display='block';
                              
                          };
                        
                      </script>


                      <!-- The Modal -->
                      <div id="id01" class="w3-modal ">      
                        <div class="w3-modal-content w3-animate-top w3-card-4">
                            <header class="w3-container w3-blue-grey"> 
                              <span onclick="document.getElementById('id01').style.display='none'" 
                              class="w3-button w3-display-topright">&times;</span>
                              <h2 class='w3-padding'>Submit Payment Online</h2>
                            </header>
                            <div id="modalContainter" class="w3-container">
                              
                              <?php echo $__env->make('eventregister.forms.payment_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="w3-container w3-padding w3-blue-grey">
                                <button class="w3-button w3-right w3-white " 
                        onclick="document.getElementById('id01').style.display='none'">Close</button>

                            </div>
                        </div>
                      </div>

<!--              END modal section -->        



<?php if($showDeleteForm): ?>
<form action="/eventregister/<?php echo e($eventregister->id); ?>" method="POST">
<?php echo method_field('DELETE'); ?>
<?php echo csrf_field(); ?>
  <button class="w3-button w3-section w3-red w3-ripple"> Delete registration in <?php echo e($event->name); ?>?</button>
</form>
<?php endif; ?>          
          

        </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.momintum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/eventregister/show.blade.php ENDPATH**/ ?>