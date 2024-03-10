<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class staffCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exactive_staff = staff::whereIn('category', ['Bishop', 'Assistant Bishop'])->where('status', '=', 'Active')->get();
        return view('admin.pages.Staff.exactivestaff', compact('exactive_staff'));
    }

    public function index_management(){
        $management = staff::whereIn('category', ['Chair Person', 'Assistant Chair Person', 'ssistant Secretary', 'Secretary', 'Assistant Treasurer', 'Treasurer'])
        ->where('status', '=', 'Active')->get();
        return view('admin.pages.Staff.management', compact('management'));
    }

    public function index_historical(){
        $exactive_historical_staff = staff::whereIn('category', ['Bishop', 'Assistant Bishop'])->where('status', '=', 'In Active')->get();
        $management_historical_staff = staff::whereIn('category', ['Chair Person', 'Assistant Chair Person', 'ssistant Secretary', 'Secretary', 'Assistant Treasurer', 'Treasurer'])->where('status', '=', 'In Active')->get();
        return view('admin.pages.Staff.historical', compact('exactive_historical_staff', 'management_historical_staff'));
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
        $staff = new staff();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/staff',$filename);
            $staff->image = $filename;
        }
        $staff->category = $request->input('category');
        $staff->name = $request->input('name');
        $staff->biography = $request->input('biography');
        $staff->phone_no = $request->input('phone_no');
        $staff->office_no = $request->input('office_no');
        $staff->status = $request->input('status');
        $staff->end_date = $request->input('end_date');
        $staff->start_date = $request->input('start_date');
        if($staff->save()){
            return redirect('/admin/staff')->with('status', 'News Added SuccessFully!');
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
        $staff = staff::find($id);
        return view('admin.pages.Staff.edit_exactivestaff', compact('staff'));
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
        $staff = staff::find($id);
        if($request->hasFile('image')){
            $path = 'admin/assets/images/staff'.$staff->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;    
            $file->move('admin/assets/images/staff',$filename);
            $staff->image = $filename;
        }
        $staff->category = $request->input('category');
        $staff->name = $request->input('name');
        $staff->biography = $request->input('biography');
        $staff->phone_no = $request->input('phone_no');
        $staff->office_no = $request->input('office_no');
        $staff->status = $request->input('status');
        $staff->end_date = $request->input('end_date');
        $staff->start_date = $request->input('start_date');
        $staff->update();
        return redirect('/admin/staff')->with('status', 'Staff was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = staff::find($id);
        if($staff->image){
            $path = 'admin/assets/images/staff/'.$staff->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $staff->delete();
        return redirect('/admin/staff')->with('status', 'Staff deleted Successfully');
    }
}
