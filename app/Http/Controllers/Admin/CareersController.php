<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Career::get();
        return view('admin.pages.careers.admin_careers',[
            'careers'=>$careers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $career = new Career();
        $career->title = $request->input('title');
        $career->description = $request->input('description');
        $career->date = $request->input('date');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/',$filename);
            $career->image = $filename;
        } 
        if($career->save()){
            $careers = Career::get();
            return view('admin.pages.careers.admin_careers',[
                'careers'=>$careers

            ])->with('status', 'careers Added SuccessFully!');
        }
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $careers = Career::get();
        $career = Career::find($id);
        return view('admin.pages.components.single_career',[
            'careers'=> $careers,
            'career'=>$career
        ]);
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
        $career = Career::find($id);
        $career->title = $request->input('title');
        $career->description = $request->input('description');
        $career->date = $request->input('date');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/',$filename);
            $career->image = $filename;
        }
        

        $career->update();
        $career = Career::get();
        $careers=Career::get();
        return view('admin.pages.careers.admin_careers',[
            'career'=>$career,
            'careers'=>$careers,
        ])->with('status', 'career Added SuccessFully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        if (!$career) {
            return back()->with('error', 'blog record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $career->delete();
        $careers = Career::get();
        return view('admin.pages.careers.admin_careers',[
            'careers'=>$careers

        ])->with('status', 'careers Added SuccessFully!');
    }
}
