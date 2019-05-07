<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth')->except(['index','show']);
   }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $events = Event::all();
        //$events = Event::where('owner_id', auth()->id())->get();

        return view('events.index', ['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create');
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
        $event = new Event();

        $event->name = request()->name;
        $event->owner_id= auth()->id();
        $event->description = request()->description;
        $event->url = request()->url;

        $event->save();
        
        return redirect('/events');
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
        
        $nextID = Event::where('id', '>', $event->id)->min('id');
        $previousID = Event::where('id', '<', $event->id)->max('id');
       //if($nextID)
        //return $nextID;
        return view('events.show', ['event'=>$event,'nextID'=>$nextID, 'previousID'=>$previousID]);

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
        $event = Event::find($id);
        return view('events.edit',['event'=>$event]);
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
        //
        // dd(request()->all());
        
        $event = Event::find($id);

        $event->name = $request->name;
        $event->description = $request->description;
        $event->url = $request->url;
        
        $event->save();

        return redirect('/events');
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
        //dd(request()->all());
        
        $event = Event::find($id)->delete();

        return redirect('/events');
    }
}
