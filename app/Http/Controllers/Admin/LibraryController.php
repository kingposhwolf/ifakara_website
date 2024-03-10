<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoLibrary;
use App\Models\VideoLibrary;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function videos(){
        $videoLibrary = VideoLibrary::get();
        return view('admin.pages.library.videos',[
            'videoLibrary'=>$videoLibrary
        ]);
    }

    public function photos(){
        $photosLibray = PhotoLibrary::get();
        return view('admin.pages.library.photos',[
            'photosLibray'=>$photosLibray
        ]);
    }

    public function single_photo($id){

        $photo = PhotoLibrary::get();
        $photosLibray = PhotoLibrary::limit(2)->latest()->get();;
        $photo = PhotoLibrary::find($id);
        return view('admin.pages.components.single_photo',[
            'photo'=> $photo,
            'photosLibray'=>$photosLibray
        ]);
    }

    public function Single_video($id){
        $video = VideoLibrary::get();
        $videoLibrary = VideoLibrary::limit(2)->latest()->get();
        $video = VideoLibrary::find($id);
        return view('admin.pages.components.single_video',[
            'video'=> $video,
            'videoLibrary'=>$videoLibrary
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $photoLibrary = new PhotoLibrary();
        $photoLibrary->title = $request->input('title');
        $photoLibrary->description = $request->input('description');
        $photoLibrary->date = $request->input('date');
        if($request->hasFile('image_one')){
            $file = $request->file('image_one');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/photos/1',$filename);
            $photoLibrary->image_one = $filename;
        }
        if($request->hasFile('image_two')){
            $file = $request->file('image_two');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/photos/2',$filename);
            $photoLibrary->image_two = $filename;
        }
        if($request->hasFile('image_three')){
            $file = $request->file('image_three');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/photos/3',$filename);
            $photoLibrary->image_three = $filename;
        }
       
        if($photoLibrary->save()){
            $photosLibray = PhotoLibrary::get();
            return view('admin.pages.library.photos',[
                'photosLibray'=>$photosLibray

            ])->with('status', 'News Added SuccessFully!');
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
        $videoLibrary = new VideoLibrary();
        $videoLibrary->title = $request->input('title');
        $videoLibrary->description = $request->input('description');
        $videoLibrary->date = $request->input('date');
        $videoLibrary->link = $request->input('link');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/videos',$filename);
            $videoLibrary->image = $filename;
        }
       
       
        if($videoLibrary->save()){
            $videoLibrary = VideoLibrary::get();

            return view('admin.pages.library.videos',[
                'videoLibrary'=>$videoLibrary

            ])->with('status', 'News Added SuccessFully!');
        }
    }


    public function updateVideo(Request $request, $id){
        $videoLibrary = VideoLibrary::find($id);
        $videoLibrary->title = $request->input('title');
        $videoLibrary->description = $request->input('description');
        $videoLibrary->date = $request->input('date');
        $videoLibrary->link = $request->input('link');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/videos',$filename);
            $videoLibrary->image = $filename;
        }
        $videoLibrary->update();
  
        return view('admin.pages.library.videos',
        [
            'videoLibrary'=>$videoLibrary
        ])->with('status', 'News Added SuccessFully!');

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
        $photoLibrary = PhotoLibrary::find($id);
        $photoLibrary->title = $request->input('title');
        $photoLibrary->description = $request->input('description');
        $photoLibrary->date = $request->input('date');
        if($request->hasFile('image_one')){
            $file = $request->file('image_one');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/photos/1',$filename);
            $photoLibrary->image_one = $filename;
        }
        if($request->hasFile('image_two')){
            $file = $request->file('image_two');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/photos/2',$filename);
            $photoLibrary->image_two = $filename;
        }
        if($request->hasFile('image_three')){
            $file = $request->file('image_three');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/images/photos/3',$filename);
            $photoLibrary->image_three = $filename;
        }

        $photoLibrary->update();
        $photosLibray = PhotoLibrary::get();
        return view('admin.pages.library.photos',[
            'photosLibray'=>$photosLibray
        ])->with('status', 'News Added SuccessFully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photosLibrary = PhotoLibrary::find($id);
        if (!$photosLibrary) {
            return back()->with('error', 'blog record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $photosLibrary->delete();
        $photosLibray = PhotoLibrary::get();
        return view('admin.pages.library.photos',[
            'photosLibray'=>$photosLibray

        ])->with('status', 'News Added SuccessFully!');
    }

    public function deleteVideo($id)
    {
        $videoLibrary = VideoLibrary::find($id);
        if (!$videoLibrary) {
            return back()->with('error', 'blog record not found.');
            // return redirect()->route('/hr/staff')->with('error', 'Staff record not found.');
        }

        $videoLibrary->delete();
        $videoLibrary = videoLibrary::get();
        return view('admin.pages.library.videos',[
            'videoLibrary'=>$videoLibrary

        ])->with('status', 'News Added SuccessFully!');
    }
    }
