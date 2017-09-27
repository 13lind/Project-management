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


    public static function getBookings()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->select('date_from', 'total_cost', 'car_used', 'time_from', 'date_to', 'completed')->where('user_id', '=', $user->id)->get();
        
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
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('car_location');
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
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('date_from');
        $result = $result->toArray();
        return $result;
    }

    public static function getPickupTime()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('time_from');
        $result = $result->toArray();
        return $result;
    }

    public static function getDropoffDate()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('date_to');
        $result = $result->toArray();
        return $result;
    }

    public static function getDropoffTime()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('time_to');
        $result = $result->toArray();
        return $result;
    }


    public static function getBookingCosts()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('total_cost');
        $result = $result->toArray();
        return $result;
    }

    public static function getHourCosts()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('cost_per_hour');
        $result = $result->toArray();
        return $result;
    }

     public static function getDayCosts()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('cost_per_day');
        $result = $result->toArray();
        return $result;
    }

    public static function getCompletion()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('completed');
        $result = $result->toArray();
        return $result;
    }    

    public static function getCarIDs()
    {
        $user = Auth::user();
        $result = DB::table('car_bookings')->where('user_id', '=', $user->id)->pluck('id');
        $result = $result->toArray();
        return $result;
    }    

    public static function setBookingCompleted()
    {
        $booking_id = request('test');
        DB::table('car_bookings')->where('id', '=', $booking_id)->update(['completed' => 1]);

        $update_costs = request('total_fee');
        
        DB::table('car_bookings')->where('id', '=', $booking_id)->update(['total_cost' => $update_costs]);

        $update_time = request('revised_dropofftime');

        DB::table('car_bookings')->where('id', '=', $booking_id)->update(['time_to' => $update_time]);

        $update_date = request('revised_dropoffdate');

        DB::table('car_bookings')->where('id', '=', $booking_id)->update(['date_to' => $update_date]);
        
        return view('/triphistory');
    }
}
