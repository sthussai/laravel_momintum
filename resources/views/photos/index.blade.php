@extends("layouts.momintum")

@section('title','Photo Index')

@section('content')
<div class="w3-center    w3-panel w3-card">
                <div class="links w3-center w3-large w3-bar w3-padding-large">
                    <a class="w3-btn" href="/photos">Home</a>           
                    <a class="w3-btn " href="/photos/create">Create New Photo</a>

                </div>
</div>                
    <div class="w3-content w3-center w3-panel w3-card">
      <h1>All Photos </h1>

      @foreach ($photos as $photo)

      <a href="/photos/{{$photo->id}}" class="w3-card  w3-block w3-hover-shadow w3-margin-bottom">
      <div style="border: solid 2px darkgrey" class=' w3-content w3-padding-16 w3-display-container'>
        {{$photo->name}}
       
        
      </div>
    </a>
      
      
        

      @endforeach
    </div>

@endsection