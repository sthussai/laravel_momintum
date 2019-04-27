@extends('layouts.momintum')

@section('dashboardTitle', 'My Dashboard')

@section('content')

<h1> Profile Page</h1>
{{'Hello World'}}

@foreach ($tests as $test) 
     <br>{{$test->id }}
 {{$test->name}}
@endforeach

{{ $tests->links() }}

@endsection