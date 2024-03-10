<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\gallery;
use App\Models\news;
use App\Models\sermon;
use App\Models\service;
use App\Models\slider;
use App\Models\verse;
use App\Models\summary;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verses = verse::all();
        $sermons = sermon::latest('created_at')->limit(3)->paginate(3);
        $slider = slider::all();
        $news = news::latest('id')->limit(3)->get();
      
        $events = events::latest('id')->limit(3)->get();
        $gallery_photo = gallery::all()->where('category', '=', 'Photo');
        $school = summary::where('category', '=', 'Schools')->latest('id')->limit(1)->get();
        $health = summary::where('category', '=', 'Healths Center')->latest('id')->limit(1)->get();
        $parish = summary::where('category', '=', 'Parishies')->latest('id')->limit(1)->get();
        $member = summary::where('category', '=', 'Members')->latest('id')->limit(1)->get();
        $education_service = service::where('category', '=', 'Education')->latest('id')->limit(1)->get();
        $health_service = service::where('category', '=', 'Health')->latest('id')->limit(1)->get();
        $bible_service = service::where('category', '=', 'Bible')->latest('id')->limit(1)->get();
        return view('welcome', compact('verses','news','events','slider','sermons','gallery_photo','school', 'health', 'parish', 'member', 'education_service', 'health_service', 'bible_service'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
