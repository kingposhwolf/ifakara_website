<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use App\Models\feedback;
use App\Models\summary;
use App\Models\news;
use App\Models\events;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->only(['index', 'customLogin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Display Login Page
    public function index()
    {
        return view('auth.login');
    }
    public function Admin_Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function dashboard()
    {
        if(Auth::check()){
        $school = summary::where('category', '=', 'Schools')->latest('id')->limit(1)->get();
        $new = news::latest('id')->limit(1)->get();
        $event = events::latest('id')->limit(1)->get();
        $health = summary::where('category', '=', 'Healths Center')->latest('id')->limit(1)->get();
        $parish = summary::where('category', '=', 'Parishies')->latest('id')->limit(1)->get();
        $member = summary::where('category', '=', 'Members')->latest('id')->limit(1)->get();
            $feedback = feedback::latest('id')->limit(2)->get();
            return view('layouts.admin.app', compact('feedback','school','health','parish','member','event','new'));
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
