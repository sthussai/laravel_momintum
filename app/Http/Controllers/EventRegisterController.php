<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\EventRegister;  
use App\Event;

class EventRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        //$eventregisters = EventRegister::where('owner_id', auth()->id())->get();
        $eventregisters = EventRegister::all();
        return view('eventregister.index',['eventregisters'=>$eventregisters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($event)
    {   
        return($event);
        //return view('eventregister.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $eventregister = new EventRegister();

        $eventregister->name = request()->name;
        $eventregister->email = request()->email;
        $eventregister->phone = request()->phone;
        $eventregister->status = 'New Registration Created';
        $eventregister->owner_id= Auth::user()->id;
        $eventregister->event_id= request()->event_id;
    

        $eventregister->save();
        
        return redirect('/eventregister'); 
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

         $event = Event::find($id);
         return view('/eventregister.create',['event'=>$event]);


        //$nextID = EventRegister::where('id', '>', $eventregister->id)->min('id');
        //$previousID = EventRegister::where('id', '<', $eventregister->id)->max('id');

        //return view('eventregisters.show', ['eventregister'=>$eventregister,'nextID'=>$nextID, 'previousID'=>$previousID]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
        $eventregister = EventRegister::find($id);
        return view('eventregisters.edit',['eventregister'=>$eventregister]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eventregister = EventRegister::find($id);

        $eventregister->name = request()->name;
        $eventregister->email = request()->email;
        $eventregister->phone = request()->phone;
        $eventregister->status = 'Registration Changed/Updated';
        $eventregister->owner_id= auth()->id();
        $eventregister->event_id= event()->id();
        
        $eventregister->save();

        return redirect('/eventregisters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $eventregister = EventRegister::find($id)->delete();

        return redirect('/eventregisters');

    }
}
