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

@media screen and (max-width: 800px) {
    #mainBlock {
  width:100%; 
}
#mainBlockImg {
  width:300px; 
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

<div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>





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
    
        <img id='mainBlockImg' src="https://www.w3schools.com/w3css/img_5terre.jpg" class='w3-padding w3-half' style="width:50%">
        <div class="w3-container w3-half w3-padding ">
            <h4>5 Terre d</h4>
        </div>
        <div class="w3-container">
            <h4>5 Terreas</h4>
        </div>
    </a>
</div>


<!-- Section 1 of 3 -->
<div id='mainBlock' class="w3-col w3-center l4 m6 w3-margin-top">
    <a class="w3-card  w3-btn">
        <div class="w3-container w3-padding  w3-light-grey">
            <h3>Momintum Mastermind</h3>        
        </div>
    
        <img id='mainBlockImg' src="https://www.w3schools.com/w3css/img_5terre.jpg" class='w3-padding w3-half' style="width:50%">
        <div class="w3-container w3-half w3-padding ">
            <h4>5 Terre d</h4>
        </div>
        <div class="w3-container">
            <h4>5 Terreas</h4>
        </div>
    </a>
</div>

<!-- <div class='w3-panel'><hr></div>
 -->
<!-- Section 1 of 3 -->
<div id='mainBlock' class="w3-col w3-center l4 m6 w3-margin-top">
    <a class="w3-card  w3-btn">
        <div class="w3-container w3-padding  w3-light-grey">
            <h3>Momintum Mastermind</h3>        
        </div>
    
        <img id='mainBlockImg' src="https://www.w3schools.com/w3css/img_5terre.jpg" class='w3-padding w3-half' style="width:50%">
        <div class="w3-container w3-half w3-padding ">
            <h4>5 Terre d</h4>
        </div>
        <div class="w3-container">
            <h4>5 Terreas</h4>
        </div>
    </a>
</div>


<!-- Section 1 of 3 -->
<div id='mainBlock' class="w3-col w3-center l4 m6 w3-margin-top">
    <a class="w3-card  w3-btn">
        <div class="w3-container w3-padding  w3-light-grey">
            <h3>Momintum Mastermind</h3>        
        </div>
    
        <img id='mainBlockImg' src="https://www.w3schools.com/w3css/img_5terre.jpg" class='w3-padding w3-half' style="width:50%">
        <div class="w3-container w3-half w3-padding ">
            <h4>5 Terre d</h4>
        </div>
        <div class="w3-container">
            <h4>5 Terreas</h4>
        </div>
    </a>
</div>

<!-- Section 1 of 3 -->
<div id='mainBlock' class="w3-col w3-center l4 m6 w3-margin-top">
    <a class="w3-card  w3-btn">
        <div class="w3-container w3-padding  w3-light-grey">
            <h3>Momintum Mastermind</h3>        
        </div>
    
        <img id='mainBlockImg' src="https://www.w3schools.com/w3css/img_5terre.jpg" class='w3-padding w3-half' style="width:50%">
        <div class="w3-container w3-half w3-padding ">
            <h4>5 Terre d</h4>
        </div>
        <div class="w3-container">
            <h4>5 Terreas</h4>
        </div>
    </a>
</div>


<!-- Section 1 of 3 -->
<div id='mainBlock' class="w3-col w3-center l4 m6 w3-margin-top">
    <a class="w3-card  w3-btn">
        <div class="w3-container w3-padding  w3-light-grey">
            <h3>Momintum Mastermind</h3>        
        </div>
    
        <img id='mainBlockImg' src="https://www.w3schools.com/w3css/img_5terre.jpg" class='w3-padding w3-half' style="width:50%">
        <div class="w3-container w3-half w3-padding ">
            <h4>5 Terre d</h4>
        </div>
        <div class="w3-container">
            <h4>5 Terreas</h4>
        </div>
    </a>
</div>

<!--  End of main section div  -->   
</div>

