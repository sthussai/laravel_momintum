@extends('layouts.momintum')


@section('content')




<div class="w3-content w3-card w3-white w3-margin-bottom">
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Account Details</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Name</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>{{ Auth::user()->name }}</h6>
            <hr>
          </div>

          <div class="w3-container">
            <h5 class="w3-opacity"><b>Contact Email</h5>
            <h6 class="w3-text-teal"><i class="fa fa-envelope fa-fw w3-margin-right"></i>{{ Auth::user()->email }}</h6>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Account Created</h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ Auth::user()->created_at }}</h6>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Last Login</h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{ Auth::user()->updated_at }}</h6>
            <hr>
          </div>
          
</div>

<div class="w3-content w3-card w3-white w3-margin-bottom ">
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Emergenct Contact</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Name</b></h5>
            <h6 class="w3-text-teal">{{ Auth::user()->name }}</h6>
            <hr>
          </div>

          <div class="w3-container">
            <h5 class="w3-opacity"><b>Contact Email</h5>
            <h6 class="w3-text-teal">{{ Auth::user()->email }}</h6>
            <hr>
          </div>
</div>

      @endsection