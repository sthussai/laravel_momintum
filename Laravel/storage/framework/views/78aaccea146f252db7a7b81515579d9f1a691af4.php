<!DOCTYPE html>

<html>
<head>   
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/wheelmenu.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/stripe.css')); ?>" rel="stylesheet">

 <!-- Scripts -->
 <script src="<?php echo e(asset('js/stripe.js')); ?>" defer></script>
 <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
 <script src="https://js.stripe.com/v3/"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<style>
body{
  
}    
    a {
    text-decoration: none !important;
}
.detailrow {
  display: flex; /* equal height of the childrenkn knk */
}

.detailcol {
  flex: 1; /* additionally, equal width */
  
  padding: 1em;
}
</style>
</head> 

<body class="w3-light-grey">
    
    <!-- Sidebar/menu -->
 
    
   <!-- Overlay effect when opening sidebar on small screens -->


<!-- Login/Register -->



<!-- Navbar -->
        
<div class='w3-bar w3-theme-d2'>
    
        <div class="w3-content w3-left-align w3-large">
            
              
              <a href="<?php echo e(url('/')); ?>" class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i><?php echo e(config('app.name', 'Laravel')); ?></a>
              <a href="<?php echo e(url('/photos')); ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Resturants"><i class="fa fa-photo"></i></a>
              <a href="<?php echo e(url('/events')); ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Events"><i class="fa fa-star"></i></a>
              <a href="<?php echo e(url('/musers')); ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Users"><i class="fa fa-user"></i></a>
              <a href="<?php echo e(url('/test')); ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Run Test"><i class="fa fa-check"></i></a>
              
              <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i> <?php echo e(__('Login')); ?></a>
                                              
                      <?php if(Route::has('register')): ?>
                          
                      <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-right w3-hover-white" href="<?php echo e(route('register')); ?>"><i class="fa fa-book"></i> <?php echo e(__('Register')); ?></a>

                      <?php endif; ?>
              <?php else: ?>


                  <div class="w3-dropdown-hover w3-bar-item w3-button w3-hide-small w3-right"><span class="w3-left w3-tiny">User ID:<?php echo e(Auth::user()->id); ?></span><br><?php echo e(Auth::user()->name); ?>

                    
                    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:43px;width:43px" alt="Avatar">
                    
                      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                        
                        <a href="<?php echo e(route('logout')); ?>" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Logout Account"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <?php echo e(Auth::user()->name); ?></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo csrf_field(); ?></form>  
                      </div>
                  </div>

               <?php endif; ?>
          
          </div>
      
 </div>






<!-- !PAGE CONTENT! -->

  
   
    <div class="w3-bar w3-padding w3-margin-top">
        <h1><b><?php echo $__env->yieldContent('dashboardTitle', 'Welcome '); ?>
        <?php if(auth()->guard()->check()): ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?>
        </b></h1>
        <?php if(auth()->guard()->check()): ?>
          <!--Logged In Nav Bar -->
          <a href="/mprofile" class="w3-bar-item w3-right w3-large w3-button w3-hide-small" title="News">Profile</a><span class="w3-bar-item w3-right">/</span>
          <a href="/payment" class="w3-bar-item w3-right w3-button w3-large w3-hide-small" title="Payments">Payments</a> <span class="w3-bar-item w3-right">/</span>
          <a href="/eventregister" class="w3-bar-item w3-right w3-button w3-large w3-hide-small" title="Registrations">Registrations</i></a><span class="w3-bar-item w3-right">/</span>
          <a href="/events" class="w3-bar-item w3-right w3-button w3-large w3-hide-small" title="Events">Events</a>
        <?php endif; ?>
    </div>


    <?php echo $__env->yieldContent('content'); ?>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>Footer</h5>
</footer><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/layouts/momintum.blade.php ENDPATH**/ ?>