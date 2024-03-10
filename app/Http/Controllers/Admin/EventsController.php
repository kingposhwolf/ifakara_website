<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = events::all();
        return view('admin.pages.whats_new.events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $events = new events();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/events',$filename);
            $events->image = $filename;
        }
        $events->events_title = $request->input('events_title');
        $events->events_description = $request->input('events_description');
        $events->location = $request->input('location');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->guest_of_honor = $request->input('guest_of_honor');
        if($events->save()){
            return redirect('/admin/events')->with('status', 'Events Added SuccessFully!');
        }
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = events::find($id);
        return view('admin.pages.whats_new.edit_events', compact('events'));
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
        $events = events::find($id);
        if($request->hasFile('image')){
            $path = 'admin/assets/images/events'.$events->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;    
            $file->move('admin/assets/images/events',$filename);
            $events->image = $filename;
        }
        $events->events_title = $request->input('events_title');
        $events->events_description = $request->input('events_description');
        $events->location = $request->input('location');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->guest_of_honor = $request->input('guest_of_honor');
        
        $events->update();
        return redirect('/admin/events')->with('status', 'Events was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = events::find($id);
        if($events->image){
            $path = 'admin/assets/images/events/'.$events->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $events->delete();
        return redirect('/admin/events')->with('status', 'Events deleted Successfully');
    }
}
