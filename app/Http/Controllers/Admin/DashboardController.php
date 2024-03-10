<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\events;
use App\Models\feedback;
use Illuminate\Http\Request;
use App\Models\news;
class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    public function index()
    {
        $feedback = feedback::latest('id')->limit(2)->get();
        $new = news::latest('id')->limit(1)->get();
        $event = events::latest('id')->limit(1)->get();
        return view('admin.dashboard',[
            'feedback' => $feedback,
            'new' => $new,
            'event' => $event,
        ]);
    }
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
