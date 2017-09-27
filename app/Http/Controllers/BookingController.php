<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use DB;

use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(Request $request) 
	{


	}

	public function confirm(Request $request) 
	{
		$user = Auth::user();

        $booking_info = new Booking;
        $booking_info->user_id = $user->id;
        $booking_info->car_used = request('car_used');
        $booking_info->rego_number = request('rego_number');
        $booking_info->car_location = request('car_location');
        $booking_info->date_from = request('date_from');
        $booking_info->time_from = request('time_from');
        $booking_info->date_to = request('date_to');
        $booking_info->time_to = request('time_to');
        $booking_info->total_cost = request('total_cost_value');
        $booking_info->cost_per_hour = request('cost_per_hour');
        $booking_info->cost_per_day = request('cost_per_day');
        $booking_info->completed = false;
        $booking_info->save();

        return redirect('/home');

	}



}
