<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use App\User;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function profile(){
        // retrieve all libraries from this user
        if(Auth::user()->roles()->first()->name == 'Member' OR Auth::user()->roles()->first()->name == 'Author'){
            $libraries = User::find(Auth::user()->id)->libraries;
            return view('dashboard', compact('libraries'));    
        }
        else return redirect('admin/categories');
    }
}
