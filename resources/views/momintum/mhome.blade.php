@extends('layouts.momintum')

@section('content')

<h1> Momintum Home</h1>
{{'Hello World'}}

@foreach ($users as $user) 
     <br>{{$user->id }}
 {{$user->name}}
@endforeach

{{ $users->onEachSide(1)->fragment('foo')->links() }}
@endsection