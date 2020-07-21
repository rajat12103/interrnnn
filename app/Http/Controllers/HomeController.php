<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

   public function logout(){
        Session::flush();
        return redirect('/home')->with('flash_message_success','Logged Out Successfully!');
    }

    public function admin(){
        return view('admin.dashboard1');
    }
}
