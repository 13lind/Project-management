<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('userprofile');
    }

    public static function getUserID()
    {
        $user = Auth::user();
        return $user->id;
        
    }


    public static function getUserFirstName()
    {
        $user = Auth::user();
        return $user->first_name;
        
    }

    public static function getUserLastName()
    {
        $user = Auth::user();
        return $user->last_name;
        
    }

    public static function getUserEmail()
    {
        $user = Auth::user();
        return $user->email;
        
    }

}
