@extends('photos.layout')

@section('title','Create')

@section('content')



<form action="/photos" method='POST' class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
{{ csrf_field() }}

<h2 class="w3-center"> Create New Photo</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" required name="name" type="text" placeholder="Name">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="description" type="text" placeholder="Description">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="url" type="text" placeholder="URl">
    </div>
</div>


<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Send </button>
</p>
</form>

@endsection