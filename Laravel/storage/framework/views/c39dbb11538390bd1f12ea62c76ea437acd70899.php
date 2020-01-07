<?php $__env->startSection('content'); ?>

<div class='w3-row-padding'>
<!-- All events half div and my registrations section-->
        
              <div class="w3-col l6 m12 s12 w3-container w3-card w3-white w3-margin-bottom w3-center" style=" ">
                  
                  
                          <!-- START My Registration Section -->
                          <div class=" w3-container w3-white w3-margin-bottom">
                                      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>My Registrations</h2>
                                      

                                      <?php $__empty_1 = true; $__currentLoopData = $eventregisters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventregister): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                        <a href="/eventregister/<?php echo e($eventregister->id); ?>" class=" w3-row-padding w3-card  w3-block w3-hover-shadow w3-margin-bottom">
                                        <div class='w3-col m3 s12 w3-padding-16'>
                                        <p class='w3-center'><img src='https://www.w3schools.com/w3images/avatar2.png' class='w3-image' style='max-height: 100px' alt='Avatar'></p>
                                        </div>
                                        <div  class='w3-col m9 s12 w3-padding-16 w3-center'>
                                          Name: <?php echo e($eventregister->name); ?><br>
                                          User ID: <?php echo e($eventregister->owner_id); ?><br>
                                          Email: <?php echo e($eventregister->email); ?><br>
                                          Phone: <?php echo e($eventregister->phone); ?><br>
                                          Event ID: <?php echo e($eventregister->event_id); ?><br>
                                          Reg Status: <?php echo e($eventregister->status); ?><br>
                                          Created: <?php echo e($eventregister->created_at); ?><br>
                                        
                                          
                                        </div>
                                        </a>
                          
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<h5 class=' w3-panel w3-border w3-round-large  w3-padding'>Not currently registered in any events</h5>
                                        <?php endif; ?>
                    
                                

                                  </div>

                         <!-- END My Registration Section -->
                  
                  <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
                  Programs and Events </h2>
                  
                  <div class='w3-row-padding '>
                  <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <!-- Section 1 of 3 -->

                          <a href="/events/<?php echo e($event->id); ?>" class="w3-col w3-center l6 m6 w3-margin-top " style="solid 2px red ">
                            <div class="w3-container w3-card  w3-padding w3-btn w3-block" style="solid 2px blue">
                                  <h3><?php echo e($event->name); ?></h3>        
                              
                              
                          <!-- Start Flex container - 2 divs side by side -->
                                    <div style="display:flex; align-items: center;  solid 2px blue"> 
                                        
                                        <img  class='w3-image' src="<?php echo e($event->url); ?>" style="width:50%; solid 2px red;">
                                        

                                        <div style='width:50%;  solid 2px red;'>
                                            <h4>5 Terre d</h4>
                                            <h4>5 Terre d</h4>
                                        </div>
                                    </div>
                      <!-- END Flex container - 2 divs side by side -->


                              <div class="w3-container w3-dark-grey" style='margin-top:5px'>
                              <p>Lorem ipsum dolor sit amet.</p>
                              <p></p>
                              </div>
                            </div>
                          </a>
                      
                      <!-- END of section 1 0f 3 -->
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>

<!-- Pagination Links -->
                   <?php echo e($events->links()); ?>

                          
                          
                     
                         <!-- START Account Details Section -->

                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Account Details</h2>
                      <span class='w3-btn w3-right w3-green' onclick="openModal();">Edit</span>
                      <div class='w3-card w3-padding'>
                        <div class="w3-container ">
                          <h5 class="w3-opacity"><b>Name</b></h5>
                          <h6 class="w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i><?php echo e(Auth::user()->name); ?></h6>
                          <hr>
                        </div>

                        <div class="w3-container">
                          <h5 class="w3-opacity"><b>Contact Email</h5>
                          <h6 class="w3-text-teal"><i class="fa fa-envelope fa-fw w3-margin-right"></i><?php echo e(Auth::user()->email); ?></h6>
                          <hr>
                        </div>
                        <div class="w3-container">
                          <h5 class="w3-opacity"><b>Account Created</h5>
                          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo e(Auth::user()->created_at); ?></h6>
                          <hr>
                        </div>
                        <div class="w3-container">
                          <h5 class="w3-opacity"><b>Last Login</h5>
                          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo e(Auth::user()->updated_at); ?></h6>
                          <hr>
                        </div>
                        
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
                                                                                <h2 class='w3-padding'>Update User Information</h2>
                                                                              </header>
                                                                              <div id="modalContainter" class="w3-container">
                                                                                
                                                                                <?php echo $__env->make('momintum.forms.edit_user_info_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                              </div>
                                                                              <div class="w3-container w3-padding w3-blue-grey">
                                                                                  <button class="w3-button w3-right w3-white " 
                                                                          onclick="document.getElementById('id01').style.display='none'">Close</button>

                                                                              </div>
                                                                          </div>
                                                                        </div>

<!--              END modal section -->
          
                  <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Emergenct Contact</h2>
                      <div class="w3-container">
                        <h5 class="w3-opacity"><b>Name</b></h5>
                        <h6 class="w3-text-teal"><?php echo e(Auth::user()->name); ?></h6>
                        <hr>
                      </div>

                      <div class="w3-container">
                        <h5 class="w3-opacity"><b>Contact Email</h5>
                        <h6 class="w3-text-teal"><?php echo e(Auth::user()->email); ?></h6>
                        <hr>
                      </div>
                    </div>



                
</div>  <!-- END of left-col main half div w/ Events and My-Registration Sections -->

<!-- Wheel menu half div -->        
        <div class='w3-col w3-card l6 m12 w3-padding-32 w3-hide-small w3-margin-bottom' style=' '>
              <div id='wheelExt' class='w3-content '>
                <div id="wheel">
                    <a class="wheel_part color01 w3-card"></a>
                    <a class="wheel_part color02"></a>
                    <a class="wheel_part color03"></a>
                    <a class="wheel_part color04"></a>
                    <a class="wheel_part word color05"></a>
                    <a class="wheel_part word color06"></a>
                    <span class="wheel_part word word01">Deen</span>
                    <span class="wheel_part word word02">Momintum</span>
                    <span class="wheel_part word word03">Projects</span>
                    <span class="wheel_part word word04">Adventure</span>
                    <span class="wheel_part word word05">Social</span>
                    <span class="wheel_part word word06">Leadership</span>
                </div>
              </div>

<!--               Overall Summary and Stats Section in Wheel menu div-->
<div class="w3-container w3-margin-top w3-display-container">
                  <h2><?php echo e(Auth::user()->name); ?>'s Overall Summary and Stats</h2>
                  <table  class="w3-table-all w3-hoverable ">
                    <thead>
                      <tr class="w3-green">
                        <th>Achievements</th>
                        <th>Progress</th>
                        <th>Certifications</th>
                        <th>Points</th>
                      </tr>
                    </thead>
                    <tr>
                      <td>Tan Tui</td>
                      <td>80%</td>
                      <td>Level 5</td>
                      <td>20 hours</td>      
                    </tr>


                  </table>

                  <div class="w3-white w3-large w3-margin-top">
                    <div class="w3-container w3-padding w3-center w3-hover-opacity w3-green " style="width:80%">80%</div>
                  </div>

</div><!-- END Overall Summary and Stats Section in Wheel menu div-->

<!--               START Table section in Wheel menu div-->
                <div class="w3-container w3-margin-top  w3-display-container">
                  <h2>Activites Log</h2>
                    <div class="w3-display-top" >
                        <div class="w3-bar w3-black">
                          <button id="" class="w3-bar-item w3-button tablink" onclick="openLink(event, 'approved');"><i class="fa fa-certificate w3-margin-right"></i>Approved</button>
                          <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'pending');"><i class="fa fa-asterisk w3-margin-right"></i>Pending</button>
                        </div>
                                    <div id='approved' class='myLink'>                              
                                                      <table  class="w3-table-all w3-hoverable ">
                                                        <thead>
                                                          <tr class="w3-blue-grey">
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Category</th>
                                                            <th>Hours</th>
                                                            <th>Points</th>
                                                          </tr>
                                                        </thead>
                                                        <?php $__currentLoopData = $activityreports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activityreport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                          <td><?php echo e($activityreport->name); ?></td>
                                                          <td><?php echo e($activityreport->date); ?></td>
                                                          <td><?php echo e($activityreport->category); ?></td>
                                                          <td><?php echo e($activityreport->hours); ?></td>
                                                          <td><?php echo e($activityreport->hours*10); ?></td>      
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                      </table>
                                      </div>
                                            <div id='pending' class='myLink' >
                                                              <table  class="w3-table-all w3-hoverable">
                                                                <thead>
                                                                  <tr class="w3-pale-red">
                                                                    <th>Name</th>
                                                                    <th>Date</th>
                                                                    <th>Category</th>
                                                                    <th>Hours</th>
                                                                    <th>Points</th>
                                                                  </tr>
                                                                </thead>
                                                                <tr>
                                                                  <td>Tan Tui</td>
                                                                  <td>80%</td>
                                                                  <td>Level 5</td>
                                                                  <td>20 hours</td>
                                                                  <td>200 points</td>      
                                                                </tr>
                                                                <tr>
                                                                <td>Tan Tui</td>
                                                                  <td>80%</td>
                                                                  <td>Level 5</td>
                                                                  <td>20 hours</td>
                                                                  <td>200 points</td>      
                                                                </tr>
                                                                <tr>

                                                              </table>
                                            </div>
                </div><!--               END Table section in Wheel menu div-->

                <script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-green", "");
  }
  document.getElementById(linkName).style.display = 'block';
  evt.currentTarget.className += " w3-green";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>
              
<!--     Reporting section in Wheel menu div-->
          <div class=" w3-margin-top">
              <div class="w3-container w3-black">
                <h2><i class="fa fa-star w3-padding w3-margin-right"></i>Activity Reporting</h2>
              </div>
              <div class="w3-container w3-white w3-padding-16">
                <form action="/activityreport" method='POST'>
                <?php echo e(csrf_field()); ?>

                  <div class="w3-row-padding" style="margin:0 -16px;">
                    <div class="w3-half w3-margin-bottom">
                      <label><i class="fa fa-bookmark"></i> Name</label>
                      <input class="w3-input w3-border" type="text" placeholder="Activity Name" name="name" required>
                    </div>
                    <div class="w3-half">
                      <label><i class="fa fa-calendar-o"></i> Date</label>
                      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="date" required>
                    </div>
                  </div>
                  <div class="w3-row-padding" style="margin:8px -16px;">
                    <div class="w3-half w3-margin-bottom">
                      <label><i class="fa fa-male"></i> Category</label>
                      <select class="w3-select" name="category">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="Momintum">Momintum</option>
                        <option value="Projects">Projects</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Social">Social</option>
                        <option value="Leadership">Leadership</option>
                        <option value="Deen">Deen</option>
                      </select>
                    </div>
                    <div class="w3-half">
                      <label><i class="fa fa-child"></i> Hours</label>
                    <input class="w3-input w3-border" type="number" value="0" name="hours" min="0" max="6">
                    </div>
                  </div>
                  <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-check w3-margin-right"></i> Submit</button>
                </form>
              </div>

          </div> <!-- END Reporting Section -->



      </div><!--END Wheel menu div-->
        

<!-- START Payment section -->
<div class=" w3-margin-top w3-padding-bottom w3-container">
              <div class="w3-container w3-white ">
              <h2 class="w3-text-grey w3-center w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Subscriptions and Payments</h2>
                Subscriptions: <?php echo e($message); ?><br>
                Customer ID: <?php echo e($user->stripe_id); ?><br>
                Card on file: <?php echo e($cardonfile); ?><br>
                Card last four digits: <?php echo e($user->card_last_four); ?><br>

                <a href="/payment"class="w3-button w3-dark-grey" type="submit"><i class="fa fa-check w3-margin-right"></i> Update Payments and Subcriptions</a>  
              </div>
            
</div>
<!-- END Payment Section -->
        
        
        </div>
</div>



<!-- Modal section for Edit User INfor form half div -->
<script>
    function openModal(){
        document.getElementById('id01').style.display='block';
    };
    
    function load_form(){
        $("#modalContainter").load("event_form_register.php");
    };
    
</script>







      <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.momintum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Laravel\resources\views/momintum/mprofile.blade.php ENDPATH**/ ?>