<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\school;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SchoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = school::all();
        return view('admin.pages.Diocese.school', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school = new school();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/school',$filename);
            $school->image = $filename;
        }
        $school->name = $request->input('name');
        $school->p_o_box = $request->input('p_o_box');
        $school->head = $request->input('head');
        $school->location = $request->input('location');
        if($school->save()){
            return redirect('/admin/school')->with('status', 'School Added SuccessFully!');
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
        $school = school::find($id);
        return view('admin.pages.Diocese.edit_school', compact('school'));
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
        $school = school::find($id);
        if($request->hasFile('image')){
            $path = 'admin/assets/images/school'.$school->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;    
            $file->move('admin/assets/images/school',$filename);
            $school->image = $filename;
        }
        $school->name = $request->input('name');
        $school->p_o_box = $request->input('p_o_box');
        $school->head = $request->input('head');
        $school->location = $request->input('location');
        $school->update();
        return redirect('/admin/school')->with('status', 'School was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = school::find($id);
        if($school->image){
            $path = 'admin/assets/images/school/'.$school->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $school->delete();
        return redirect('/admin/school')->with('School', 'Parish deleted Successfully');
    }
}
