<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\health_institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HealthsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $health_institutes = health_institute::all();
        return view('admin.pages.Diocese.health', compact('health_institutes'));
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
        $health_institute = new health_institute();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/health',$filename);
            $health_institute->image = $filename;
        }
        $health_institute->name = $request->input('name');
        $health_institute->p_o_box = $request->input('p_o_box');
        $health_institute->head = $request->input('head');
        $health_institute->location = $request->input('location');
        $health_institute->description = $request->input('description');
        $health_institute->website_link = $request->input('website_link');

        if($health_institute->save()){
            return redirect('/admin/health')->with('status', 'Health Institute Added SuccessFully!');
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
        $health_institute = health_institute::find($id);
        return view('admin.pages.Diocese.edit_health', compact('health_institute'));
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
        $health_institute = health_institute::find($id);
        if($request->hasFile('image')){
            $path = 'admin/assets/images/health'.$health_institute->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/health',$filename);
            $health_institute->image = $filename;
        }
        $health_institute->name = $request->input('name');
        $health_institute->p_o_box = $request->input('p_o_box');
        $health_institute->head = $request->input('head');
        $health_institute->location = $request->input('location');
        $health_institute->description = $request->input('description');
        $health_institute->website_link = $request->input('website_link');

        $health_institute->update();
        return redirect('/admin/health')->with('status', 'Health Institute was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $health_institute = health_institute::find($id);
        if($health_institute->image){
            $path = 'admin/assets/images/health/'.$health_institute->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $health_institute->delete();
        return redirect('/admin/health')->with('status', 'Health Institute deleted Successfully');
    }
}
