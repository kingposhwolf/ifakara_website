<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\parish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ParishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parishes = parish::all();
        return view('admin.pages.Diocese.parish', compact('parishes'));
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
        $parish = new parish();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/parish',$filename);
            $parish->image = $filename;
        }
        $parish->name = $request->input('name');
        $parish->p_o_box = $request->input('p_o_box');
        $parish->head = $request->input('head');
        $parish->location = $request->input('location');
        if($parish->save()){
            return redirect('/admin/parish')->with('status', 'Parish Added SuccessFully!');
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
        $parish = parish::find($id);
        return view('admin.pages.Diocese.edit_parish', compact('parish'));
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
        $parish = parish::find($id);
        if($request->hasFile('image')){
            $path = 'admin/assets/images/parish'.$parish->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;    
            $file->move('admin/assets/images/parish',$filename);
            $parish->image = $filename;
        }
        $parish->name = $request->input('name');
        $parish->p_o_box = $request->input('p_o_box');
        $parish->head = $request->input('head');
        $parish->location = $request->input('location');
        $parish->update();
        return redirect('/admin/parish')->with('status', 'Parish was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parish = parish::find($id);
        if($parish->image){
            $path = 'admin/assets/images/parish/'.$parish->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $parish->delete();
        return redirect('/admin/parish')->with('status', 'Parish deleted Successfully');
    }
}
