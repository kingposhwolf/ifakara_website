<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\events;
use App\Models\gallery;
use App\Models\health_institute;
use App\Models\news;
use App\Models\service;
use App\Models\school;
use App\Models\diocese_department;
use App\Models\PhotoLibrary;
use App\Models\VideoLibrary;
use Illuminate\Http\Request;

class SitePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function catholic_diocese()
    {
        $news = news::latest('id')->limit(4)->get();
        $events = events::latest('id')->limit(4)->get();
        $gallery_photo = gallery::all()->where('category', '=', 'Photo');
        return view('pages.catholic_diocese',compact('gallery_photo','news','events'));
    }

    public function research(){
        return view('pages.reseach_inst_old');
    }


    public function departiment(){
        $departments = diocese_department::all();
        return view('pages.departiment',compact('departments'));
    }

    public function contact(){
        return view ('pages.contact');
    }

    public function schools(){
        $schools = school::all();
        return view('pages.schools',compact('schools'));
    }

    public function healths(){
        $hospitals = health_institute::all();
        return view('pages.healths', compact('hospitals'));
    }

    public function news_single($id){
        $news = news::find($id);
        $latest = news::latest('id')->limit(7)->get();
        return View('pages.single_news', compact('news', 'latest'));
    }

    public function single_events($id){
        $events = events::find($id);
        $latest = events::latest('id')->limit(7)->get();
        return View('pages.single_events', compact('events', 'latest'));
    }

    public function single_service_education($id){
        $education_service = service::find($id);
        return View('pages.single_education_service', compact('education_service'));
    }

    public function single_service_bible($id){
        $bible_service = service::find($id);
        return View('pages.single_bible_service', compact('bible_service'));
    }

    public function single_service_health($id){
        $health_service = service::find($id);
        return View('pages.single_health_service', compact('health_service'));
    }

    public function news_event(){
        $news = news::latest('id')->get();
        $events = events::latest('id')->get();
        return View('pages.news_events',compact('news','events'));
    }

    public function singleandnews(){

        return View('pages.single_news');
    }

    public function gallery()
    {
        $photosLibrary = PhotoLibrary::orderBy('date', 'desc')->get();

        return view('pages.gallery', [
            'photosLibrary' => $photosLibrary,
        ]);
    }


    public function video(){
        $videoLibrary = VideoLibrary::orderBy('date', 'desc')->get();;
        return view('pages.video',[
            'videoLibrary'=>$videoLibrary

        ]);
    }
    public function careers(){
        $careers = Career::orderBy('created_at', 'desc')->get();
        return view('pages.careers',[
            'careers'=>$careers
        ]);
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
