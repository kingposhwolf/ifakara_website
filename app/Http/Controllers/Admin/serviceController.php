<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::all();
        return view('admin.pages.Documents.service', compact('services'));
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
        $service = new service();
        $service->title = $request->input('title');
        $service->initial_description = $request->input('initial_description');
        $service->description = $request->input('description');
        $service->category = $request->input('category');
        if($service->save()){
            return redirect('/admin/service')->with('status', 'Service Added SuccessFully!');
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
        $service = service::find($id);
        return view('admin.pages.Documents.edit_service', compact('service')); 
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
        $service = service::find($id);
        $service->title = $request->input('title');
        $service->initial_description = $request->input('initial_description');
        $service->description = $request->input('description');
        $service->category = $request->input('category');
        $service->update();
        return redirect('/admin/service')->with('status', 'Service was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = service::find($id);
        $service->delete();
        return redirect('/admin/service')->with('status', 'Service deleted Successfully');
    }
}
