<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = gallery::all()->where('category', '=', 'Photo');
        $videos = gallery::all()->where('category', '=', 'Video');
        $audios = gallery::all()->where('category', '=', 'Audio');
        return view('admin.pages.whats_new.gallery', compact('photos','videos','audios'));
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
    // Initialize an empty array to store the filenames
    $filenames = [];

    // Check if files are present in the request
    if ($request->hasFile('media')) {
        // Loop through each uploaded file
        foreach ($request->file('media') as $file) {
            // Get the original file extension
            $ext = $file->getClientOriginalExtension();
            // Generate a unique filename using the current timestamp
            $filename = time() . '_' . uniqid() . '.' . $ext;
            // Move the file to the desired location
            $file->move('admin/assets/images/gallery', $filename);
            // Store the filename in the array
            $filenames[] = $filename;
        }
    }

    // Create a new gallery object
    $gallery = new Gallery();
    // Assign the filenames to the 'media' attribute
    $gallery->media = json_encode($filenames);
    // Assign other attributes from the request
    $gallery->category = $request->input('category');
    $gallery->name = $request->input('name');
    $gallery->description = $request->input('description');

    // Save the gallery object to the database
    if ($gallery->save()) {
        return redirect('/admin/gallery')->with('status', 'Gallery Added Successfully!');
    } else {
        // Handle the case where saving failed
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
        $gallery = gallery::find($id);
        return view('admin.pages.whats_new.edit_gallery', compact('gallery'));
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
    try{
        $gallery = gallery::find($id);

        // Initialize an empty array to store the filenames
        $filenames = [];

        // Check if files are present in the request
        if ($request->hasFile('media')) {
            // Loop through each uploaded file
        foreach ($request->file('media') as $file) {
            // Get the original file extension
            $ext = $file->getClientOriginalExtension();
            // Generate a unique filename using the current timestamp
            $filename = time() . '_' . uniqid() . '.' . $ext;
            // Move the file to the desired location
            $file->move('admin/assets/images/gallery', $filename);
            // Store the filename in the array
            $filenames[] = $filename;
        }
    }

        // Assign the filenames to the 'media' attribute
    $gallery->media = json_encode($filenames);
    // Assign other attributes from the request
    $gallery->category = $request->input('category');
    $gallery->name = $request->input('name');
    $gallery->description = $request->input('description');

    $gallery->update();

    Session::flash('status', 'Gallery updated Successfully!');
    Session::flash('status_class', 'alert-success');

    return redirect()->back();
    } catch (\Exception $e) {
        Session::flash('status', 'Failed to update: ' . $e->getMessage());
        Session::flash('status_class', 'alert-danger');
        return redirect()->back();
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
    // Find the gallery entry by its ID
    $gallery = Gallery::find($id);

    // Check if the gallery entry exists
    if (!$gallery) {
        // Handle the case where the gallery entry does not exist
        return redirect('/admin/gallery')->with('error', 'Gallery not found!');
    }

    // Delete the associated media files
    $filenames = json_decode($gallery->media, true);
    foreach ($filenames as $filename) {
        // Delete the file from the server
        if (file_exists(public_path('admin/assets/images/gallery/' . $filename))) {
            unlink(public_path('admin/assets/images/gallery/' . $filename));
        }
    }

    // Delete the gallery entry from the database
    if ($gallery->delete()) {
        // Redirect with success message
        return redirect('/admin/gallery')->with('status', 'Gallery deleted successfully!');
    } else {
        // Handle the case where deletion failed
        return redirect('/admin/gallery')->with('error', 'Failed to delete gallery!');
    }
}

}
