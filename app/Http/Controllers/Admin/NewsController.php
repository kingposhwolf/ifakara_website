<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $news = news::all();
        return view('admin.pages.whats_new.news', compact('news'));
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
        $news = new news();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/news',$filename);
            $news->image = $filename;
        }
        $news->news_title = $request->input('news_title');
        $news->news_description = $request->input('news_description');
        $news->news_date = $request->input('news_date');
        $news->initial_description = $request->input('initial_description');
        if($news->save()){
            return redirect('/admin/news')->with('status', 'News Added SuccessFully!');
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
        $news = news::find($id);
        return view('admin.pages.whats_new.edit_news', compact('news'));
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
        $news = news::find($id);
        if($request->hasFile('image')){
            $path = 'admin/assets/images/news'.$news->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;    
            $file->move('admin/assets/images/news',$filename);
            $news->image = $filename;
        }
        $news->news_title = $request->input('news_title');
        $news->news_description = $request->input('news_description');
        $news->initial_description = $request->input('initial_description');
        $news->news_date = $request->input('news_date');
        
        $news->update();
        return redirect('/admin/news')->with('status', 'News was Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = news::find($id);
        if($news->image){
            $path = 'admin/assets/images/news/'.$news->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $news->delete();
        return redirect('/admin/news')->with('status', 'News deleted Successfully');
    }
}
