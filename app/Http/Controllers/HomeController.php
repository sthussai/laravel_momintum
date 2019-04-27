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


    public function test()
    { 
        $tests = Flight::where('id','<', 14)->Paginate(5);
        return view('momintum.mtest', ['tests'=>$tests]);
    }


}
