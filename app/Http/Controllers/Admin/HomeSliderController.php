<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = slider::all();
        return view('admin.pages.slider.slider', compact('slider'));
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
        $slider = new slider();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/slider',$filename);
            $slider->image = $filename;
        }
        $slider->title = $request->input('title');
        $slider->small_description = $request->input('small_description');
        if($slider->save()){
            return redirect('/admin/slider')->with('status', 'Slider Added SuccessFully!');
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
        $slider = slider::find($id);
        return view('admin.pages.slider.edit_slider', compact('slider'));
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
        $slider = slider::find($id);
        if($slider){
            if($request->hasFile('image')){
                $path = 'admin/assets/images/slider'. $slider->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('admin/assets/images/gallery',$filename);
                $slider->image = $filename;
            }
            $slider->title = $request->input('title');
            $slider->small_description = $request->input('small_description');

            $slider->update();
            return redirect('/admin/slider')->with('status', 'Slider was Updated successfully!');
        }else{
            return redirect('/admin/slider')->with('status', 'Slider failed to update!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::find($id);

        if($slider->image){
            $path = 'admin/assets/images/slider/'.$slider->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $slider->delete();
        return redirect('/admin/slider')->with('status', 'Slider deleted Successfully');
    }
}
