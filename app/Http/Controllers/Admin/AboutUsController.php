<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\summary;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function summary(){
        $school = summary::where('category', '=', 'Schools')->latest('id')->limit(1)->get();
        $health = summary::where('category', '=', 'Healths Center')->latest('id')->limit(1)->get();
        $parish = summary::where('category', '=', 'Parishies')->latest('id')->limit(1)->get();
        $member = summary::where('category', '=', 'Members')->latest('id')->limit(1)->get();
        return view('admin.pages.about_us.summary', compact('school', 'health', 'parish', 'member'));
    }

    public function storeSummary(Request $request)
    {
        $summary = new summary();
        $summary->name = $request->input('name');
        $summary->category = $request->input('category');
        $summary->amount = $request->input('amount');
        if($summary->save()){
            return redirect('/admin/summary')->with('status', 'Summary Added SuccessFully!');
        }
    }

    public function editsummary($id)
    {
        $summary = summary::find($id);
        return view('admin.pages.about_us.editsummary', compact('summary')); 
    }

    public function updatesummary(Request $request, $id)
    {
        $summary = summary::find($id);
        $summary->name = $request->input('name');
        $summary->category = $request->input('category');
        $summary->amount = $request->input('amount');
        
        $summary->update();
        return redirect('/admin/summary')->with('status', 'Summary was Updated successfully!');
    }

    public function destroysummary($id)
    {
        $summary = summary::find($id);
        $summary->delete();
        return redirect('/admin/summary')->with('status', 'Summary deleted Successfully');
    }
}
