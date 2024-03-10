<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verses = verse::all();
        return view('admin.pages.whats_new.verse', compact('verses'));
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
        $verses = new verse();
        $verses->verse = $request->input('verse');
        $verses->servant = $request->input('servant');
        if($verses->save()){
            return redirect('/admin/verse')->with('status', 'Verse Added SuccessFully!');
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
        $verses = verse::find($id);
        return view('admin.pages.whats_new.edit_verse', compact('verses')); 
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
        $verses = verse::find($id);
        $verses->verse = $request->input('verse');
        $verses->servant = $request->input('servant');
        
        $verses->update();
        return redirect('/admin/verse')->with('status', 'Verse was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $verses = verse::find($id);
        $verses->delete();
        return redirect('/admin/verse')->with('status', 'Verse deleted Successfully');
    }
}
