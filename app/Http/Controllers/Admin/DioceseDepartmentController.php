<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\diocese_department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isNull;

class DioceseDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diocese_department = diocese_department::all();
        return view('admin.pages.Department.dioceseDeprtment', compact('diocese_department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {
        try {
            $department = new diocese_department();
            $department->name = $request->input('name');
            $department->head = $request->input('head');
            $department->location = $request->input('location');
            $department->description = $request->input('description');
            $department->staffs = $request->input('staffs');
            $department->save();
            Session::flash('status', 'Department registered Successfully!');
            Session::flash('status_class', 'alert-success');

            return redirect()->back();
        } catch (\Exception $e) {
            Session::flash('status', 'Failed to add new Department: ' . $e->getMessage());
            Session::flash('status_class', 'alert-danger');
            return redirect()->back();
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
        $department = diocese_department::find($id);
        return view('admin.pages.Department.edit_dioceseDepartment', compact('department'));
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
            $department = diocese_department::find($id);
            $department->name = $request->input('name');
            $department->head = $request->input('head');
            $department->location = $request->input('location');
            $department->description = $request->input('description');
            $department->staffs = $request->input('staffs');

            $department->update();
            Session::flash('status', 'Department updated Successfully!');
            Session::flash('status_class', 'alert-success');

            return redirect('/admin/Diocese_Department');

        }catch(\Exception $e){

            Session::flash('status', 'Failed to update Department: ' . $e->getMessage());
            Session::flash('status_class', 'alert-danger');
            return redirect('/admin/Diocese_Department');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        try{
            $department = diocese_department::find($id);

            $department->delete();

            Session::flash('status', 'Department deleted Successfully!');
            Session::flash('status_class', 'alert-success');
            return redirect()->back();
        }catch(\Exception $e){

            Session::flash('status', 'Failed to delete Department: ' . $e->getMessage());
            Session::flash('status_class', 'alert-danger');
            return redirect()->back();
        }

    }
}
