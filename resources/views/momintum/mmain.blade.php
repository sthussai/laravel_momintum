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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>

<style>

#mainBlock{
    background-color: ;
}

@media screen and (max-width: 700px) {
    #mainBlock {
  width:100%; 
}

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
<div class='w3-bar w3-theme-d2'>
    
        <div class="w3-content w3-left-align w3-large">
              <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
              
              <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>{{ config('app.name', 'Laravel') }}</a>
              @guest
                <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-right w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i>{{ __('Login') }}</a>
                                              
                      @if (Route::has('register'))
                          
                      <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="{{ route('register') }}">{{ __('Register') }}</a>

                      @endif
              @else
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>


                  <div class="w3-dropdown-hover w3-bar-item w3-button w3-hide-small w3-right" style="margin-right:20%">{{ Auth::user()->name }}
                    <img src="https://www.w3schools.com/w3images/avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
                      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
                        <a href="#" class="w3-bar-item w3-button">One new friend request</a>
                        <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout {{ Auth::user()->name }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>  
                      </div>
                  </div>

               @endguest
          
          </div>
      
 </div>




<!-- !PAGE CONTENT! -->
<div class="w3-main" style=""> 
  <div class="w3-container">
      <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
<div class="w3-container w3-margin-top">
    <h1><b>@yield('dashboardTitle', 'Welcome')</b></h1>
    </div>
  </header>
<!--Dashboard section -->
 <div class="w3-row-padding w3-margin-bottom">
    <a href="/test" class="w3-third ">
      <div class="w3-container w3-red w3-btn w3-bar w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>03</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Run Test</h4>
      </div>
    </a>
    <a href="/" class=" w3-third">
      <div class="w3-container w3-blue w3-btn w3-bar w3-padding-16">
        <div class="w3-left"><i class="fa fa-home w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>02</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Home</h4>
      </div>
    </a>
    <a href="progress.php" class="  w3-third">
      <div class="w3-container w3-orange w3-btn w3-bar w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50%</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>My Progress</h4>
      </div>
      </a>
</div>    



<!-- Main Page Blocks section -->

<div class="w3-row-padding w3-margin-top">


                  <!-- Section 1 of 3 -->
                  <div id='mainBlock' class="w3-col w3-center l4 m6 w3-margin-top">
                      <a class="w3-card  w3-btn">
                          <div class="w3-container w3-padding  w3-light-grey">
                              <h3>Momintum Mastermind</h3>        
                          </div>
                          
                      <!-- Start Flex container - 2 divs side by side -->
                      <div style="display:flex; align-items: center;  solid 2px blue"> 
                          <div style="width:50%">
                          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style=" solid 2px red">
                          </div>

                          <div style='width:50%;  solid 2px red;'>
                              <h4>5 Terre d</h4>
                              <h4>5 Terre d</h4>
                          </div>
                      </div>
                      <!-- END Flex container - 2 divs side by side -->

                          <div class="w3-container w3-dark-grey" style='margin-top:5px'>
                          <p>Lorem ipsum dolor sit amet.</p>
                          <p>2 Hours Ago</p>
                          </div>
                          
                      </a>
                  </div>
                  <!-- END of section 1 0f 3 -->

                  <!-- Section 1 of 3 -->
                  <div id='mainBlock' class="w3-col w3-center l4 m6 w3-margin-top">
                      <a class="w3-card  w3-btn">
                          <div class="w3-container w3-padding  w3-light-grey">
                              <h3>Momintum Mastermind</h3>        
                          </div>
                          
                      <!-- Start Flex container - 2 divs side by side -->
                      <div style="display:flex; align-items: center;  solid 2px blue"> 
                          <div style="width:50%">
                          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style=" solid 2px red">
                          </div>

                          <div style='width:50%;  solid 2px red;'>
                              <h4>5 Terre d</h4>
                              <h4>5 Terre d</h4>
                          </div>
                      </div>
                      <!-- END Flex container - 2 divs side by side -->

                          <div class="w3-container w3-dark-grey" style='margin-top:5px'>
                          <p>Lorem ipsum dolor sit amet.</p>
                          <p>2 Hours Ago</p>
                          </div>
                          
                      </a>
                  </div>
                  <!-- END of section 1 0f 3 -->

                  <!-- Section 1 of 3 -->
                  <div id='mainBlock' class="w3-col w3-center l4 m6 w3-margin-top">
                      <a class="w3-card  w3-btn">
                          <div class="w3-container w3-padding  w3-light-grey">
                              <h3>Momintum Mastermind</h3>        
                          </div>
                          
                      <!-- Start Flex container - 2 divs side by side -->
                      <div style="display:flex; align-items: center;  solid 2px blue"> 
                          <div style="width:50%">
                          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style=" solid 2px red">
                          </div>

                          <div style='width:50%;  solid 2px red;'>
                              <h4>5 Terre d</h4>
                              <h4>5 Terre d</h4>
                          </div>
                      </div>
                      <!-- END Flex container - 2 divs side by side -->

                          <div class="w3-container w3-dark-grey" style='margin-top:5px'>
                          <p>Lorem ipsum dolor sit amet.</p>
                          <p>2 Hours Ago</p>
                          </div>
                          
                      </a>
                  </div>
                  <!-- END of section 1 0f 3 -->




<!--  End of main section div  -->   
</div>



<!-- Menu Article Section Container -->
<div class="w3-container w3-padding-64 w3-large" id="menu">
  <div class="w3-content">
  
    <div class="w3-row w3-center ">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col l2 m3 s6 tablink w3-padding-large w3-hover-grey">Upcoming</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col l2 m3 s6 tablink w3-padding-large w3-hover-grey">News</div>
      </a>

    </div>

    <div id="Pizza" style="solid 2px red" class="w3-container menu w3-padding-32 w3-white ">

      <!-- Start Article Section 1 of 3 -->    
      <div class='w3-row-padding w3-content w3-large' style="solid 2px blue">
          <div class='w3-mobile w3-col l4 m5 s12' style="solid 2px red">
          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style="max-height:250px;solid 2px red">
          </div>
          <div class='w3-mobile w3-col l8 m7 s12' style="margin-top:10px; solid 2px red;">
          <h3><b>Article</b> <span class="w3-right w3-tag w3-dark-grey w3-round">New</span></h3>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          </div>
      </div>
      <!-- END Article Section 1 of 3 -->      
      <hr>
      <!-- Start Article Section 1 of 3 -->    
      <div class='w3-row-padding w3-content w3-large' style="solid 2px blue">
          <div class='w3-mobile w3-col l4 m5 s12 ' style="solid 2px red">
          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style="max-height:250px;solid 2px red">
          </div>
          <div class='w3-mobile w3-col l8 m7 s12 ' style="margin-top:10px; solid 2px red;">
          <h3><b>Article</b> <span class="w3-right w3-tag w3-dark-grey w3-round">New</span></h3>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          </div>
      </div>
      <!-- END Article Section 1 of 3 -->      
      <hr>
            <!-- Start Article Section 1 of 3 -->    
            <div class='w3-row-padding w3-content w3-large' style="solid 2px blue">
          <div class='w3-mobile w3-col l4 m5 s12 ' style="solid 2px red">
          <img  class='w3-image' src="https://www.w3schools.com/w3css/img_5terre.jpg" style="max-height:250px;solid 2px red">
          </div>
          <div class='w3-mobile w3-col l8 m7 s12 ' style="margin-top:10px; solid 2px red;">
          <h3><b>Article</b> <span class="w3-right w3-tag w3-dark-grey w3-round">New</span></h3>
          <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
          </div>
      </div>
      <!-- END Article Section 1 of 3 -->      
      <hr>
    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Lasagna</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$13.50</span></h1>
      <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
      <p class="w3-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
      <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$25.50</span></h1>
      <p class="w3-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div>


    <br>

  </div>
</div>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();

</script>