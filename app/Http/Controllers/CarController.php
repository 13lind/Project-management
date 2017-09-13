<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use DB;

class CarController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index() 
	{
		return view('findcar');
	}

	public function book(Request $request) 
	{
		$car_info = new Car;
		$car_info->make = request('make');
		$car_info->model = request('model');
		$car_info->rego_number = request('rego_number');
		$car_info->car_location = request('car_location');
		$car_info->cost_per_hour = request('cost_per_hour');
		$car_info->cost_per_day = request('cost_per_day');

		
		return view('booking', ['make' => $car_info->make,
									   'model' => $car_info->model,
									   'rego_number' => $car_info->rego_number,
									   'car_location' => $car_info->car_location,
									   'cost_per_hour' => $car_info->cost_per_hour,
									   'cost_per_day' => $car_info->cost_per_day]);
		

	}


	public static function getTotalCarCount()
	{
		return DB::table('car_info')->count();
	}

	public static function getCarMake()
    {
    	$result = DB::table('car_info')->pluck('make');
		$result = $result->toArray();
    	return $result;
	}

	public static function getCarModel()
    {
    	$result = DB::table('car_info')->pluck('model');
		$result = $result->toArray();
    	return $result;
	}

	public static function getCarRego()
    {
    	$result = DB::table('car_info')->pluck('rego_number');
		$result = $result->toArray();
    	return $result;
	}

	public static function getCarLocation()
    {
    	$result = DB::table('car_info')->pluck('car_location');
		$result = $result->toArray();
    	return $result;
	}
	public static function getCarCostHour()
    {
    	$result = DB::table('car_info')->pluck('cost_per_hour');
		$result = $result->toArray();
    	return $result;
	}

	public static function getCarCostDay()
    {
    	$result = DB::table('car_info')->pluck('cost_per_day');
		$result = $result->toArray();
    	return $result;
	}

	public static function getCarAvaliability()
    {
    	$result = DB::table('car_info')->pluck('avaliable');
		$result = $result->toArray();
    	return $result;
	}	

}
