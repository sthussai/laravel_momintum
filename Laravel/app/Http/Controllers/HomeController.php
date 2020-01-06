<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Flight;
use App\Event;
use App\EventRegister;
use App\ActivityReport;  
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
    {   $events = Event::paginate(4);
        $user = Auth::user();
        $eventregisters = EventRegister::where('owner_id', auth()->id())->get();
        $activityreports = ActivityReport::where('owner_id', auth()->id())->get();
        
        if ($user->subscribed('Momintum')) {
            //
            $message='Subscribed to momintum!';
        } else{$message='No subscriptions';}

        if ($user->hasPaymentMethod()) {
            //
            $cardonfile='Yes';
        }else{$cardonfile='No Card on file';}
        
        return view('momintum.mprofile', ['user'=>$user,'cardonfile'=>$cardonfile,'message'=>$message,'events'=> $events, 'eventregisters'=>$eventregisters, 'activityreports'=>$activityreports]);
        
        
        
    }

    public function test()
    {    
        $tests = Flight::where('id','<', 14)->Paginate(5);
       return view('momintum.mtest', ['tests'=>$tests]);
        //dd(auth()->user());
        //print_r $request;

//        $user = User::find(1);

//        $user->createAsStripeCustomer();

    }


}
