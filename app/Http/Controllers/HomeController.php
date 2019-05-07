<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Flight;
use App\Event;
use App\EventRegister;  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('musers');
    }
    //auth()->id()
    //auth()->user()
    //auth()->check()
        //auth()->guest()
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function musers()
    {   
       $users = User::paginate(5);
     
        return view('momintum.musers', ['users'=> $users]);
    }

    public function mprofile()
    {    $events = Event::paginate(4);

        $eventregisters = EventRegister::where('owner_id', auth()->id())->get();
                
        
        return view('momintum.mprofile', ['events'=> $events, 'eventregisters'=>$eventregisters]);
        
        
        
    }

    public function test()
    {   $sun = 
        $tests = Flight::where('id','<', 14)->Paginate(5);
       return view('momintum.mtest', ['tests'=>$tests]);

        //print_r $request;
    }


}
