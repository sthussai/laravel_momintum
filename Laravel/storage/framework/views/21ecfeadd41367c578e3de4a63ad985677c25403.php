<?php $__env->startSection('title','Create'); ?>

<?php $__env->startSection('content'); ?>

<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/events">Home</a>           
                    <a class="w3-btn " href="/events/create">Create New Event</a>

                </div>


                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<form action="/events" method='POST' class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<?php echo e(csrf_field()); ?>


<h2 class="w3-center"> Create New Event</h2>
 
<div class="w3-row w3-section" style='width:320px; '>

      Select Type:
      <label>Event</label>
      <input  type="radio" name="type" value="event" checked>
      <label>Program</label>
      <input  type="radio" name="type" value="program">

</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" required name="name" type="text" placeholder="Event Name" >
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-info"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="description" type="text" placeholder="Event Description" >
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-image"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="url" type="text" placeholder="Event URl" >
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-dollar"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="cost" type="text" placeholder="Event Cost" >
    </div>
</div>

<div class="w3-row w3-section">
    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
      <input class="w3-input w3-third date w3-border" name="start_date" type="text" placeholder="Start Date">
      <input class="w3-input date w3-third w3-border" name="end_date" type="text" placeholder="End Date">
    </div>

</div>

<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>  


<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Create Event </button>
</p>
</form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.momintum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/events/create.blade.php ENDPATH**/ ?>