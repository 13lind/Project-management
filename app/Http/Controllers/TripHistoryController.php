<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TripHistory;
use DB;

use Illuminate\Support\Facades\Auth;

class TripHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('triphistory');
    }

    // public static function getUserBookings()
    // {
    //     $user = Auth::user();
    //     $user_id = DB::table('car_bookings')->get()->where('id', '=', $user->id);
        

    



    //     foreach ($user_id as $user) 
    //     {
            
    //     	if($user->completed == 1) 
    //     	{
    //     		$completed = "true";
    //     	} else {
    //     		$completed = "false";
    //     	}


    //         echo  $user->car_used . " " . $user->car_location . " " . $user->date_from . " " . $user->time_from . " " . $user->date_to .
    //          " " . $user->time_to . " " . $user->date_from . " $" . $user->total_cost . " " . $completed;

    //         echo "<br>";

    //     }

           
           
            
            

    //     return;
    // }

    public static function getBookings()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->select('date_from', 'total_cost', 'car_used')->where('id', '=', $user->id)->get();
        
        return $result;
    }

    public static function getCarUsed()
    {
        $result = DB::table('car_bookings')->pluck('car_used');
        $result = $result->toArray();
        return $result;
    }

    public static function getCarRego()
    {
        $result = DB::table('car_bookings')->pluck('rego_number');
        $result = $result->toArray();
        return $result;
    }

    public static function getCarLocation()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('id', '=', $user->id)->pluck('car_location');
        $result = $result->toArray();
        return $result;
    }

    public static function getLat()
    {
        $user = Auth::user();
        $result = DB::table('car_info')->pluck('lat');
        $result = $result->toArray();
        return $result;
    }   

    public static function getLng()
    {
        $user = Auth::user();
        $result = DB::table('car_info')->pluck('long');
        $result = $result->toArray();
        return $result;
    }   

    public static function getPickupDate()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('id', '=', $user->id)->pluck('date_from');
        $result = $result->toArray();
        return $result;
    }

    public static function getPickupTime()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('id', '=', $user->id)->pluck('time_from');
        $result = $result->toArray();
        return $result;
    }

    public static function getDropoffDate()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('id', '=', $user->id)->pluck('date_to');
        $result = $result->toArray();
        return $result;
    }

    public static function getDropoffTime()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('id', '=', $user->id)->pluck('time_to');
        $result = $result->toArray();
        return $result;
    }


    public static function getBookingCosts()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('id', '=', $user->id)->pluck('total_cost');
        $result = $result->toArray();
        return $result;
    }
}
