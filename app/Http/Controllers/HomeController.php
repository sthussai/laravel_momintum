<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mprofile(Request $request)
    {   
        //return(Auth::user());
        //return view('momintum.mprofile');
        //return(session()->all());
        if ($request->session()->exists('users')) {
            return('true');
            //
        }else{return'false';}
        
    }

    public function test()
    {   $sun = 
        $tests = Flight::where('id','<', 14)->Paginate(5);
       return view('momintum.mtest', ['tests'=>$tests]);

        //print_r $request;
    }


}
