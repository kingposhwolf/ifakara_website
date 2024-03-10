<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = feedback::all();
        return view('admin.pages.feedback.feedback', compact('feedback'));
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
        $feedback = new feedback();
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->subject = $request->input('subject');
        $feedback->message = $request->input('message');
        if($feedback->save()){
            return redirect('/')->with('status', 'Feedback Added SuccessFully!');
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
        $feedback = feedback::find($id);
        return view('admin.pages.feedback.edit_feedback', compact('feedback')); 
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
        $feedback = feedback::find($id);
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->subject = $request->input('subject');
        $feedback->message = $request->input('message');
        
        $feedback->update();
        return redirect('/admin/feedback')->with('status', 'Verse was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = feedback::find($id);
        $feedback->delete();
        return redirect('/admin/feedback')->with('status', 'feedback deleted Successfully');
    }
}
