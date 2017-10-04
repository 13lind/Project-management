<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Car;
use DB;

class CarController extends Controller
{
    


	public function index() 
	{
		return view('findcar');
	}



    public function set(Request $request) 
    {
        $car_info = new Car;
        $car_info->make = request('make');
        $car_info->model = request('model');
        $car_info->rego_number = request('rego_number');
        $car_info->car_location = request('car_location');
        $car_info->cost_per_hour = request('cost_per_hour');
        $car_info->cost_per_day = request('cost_per_day');

        
        Session::put('carInfo', $car_info);

        return redirect()->route('get');

    }




	public static function getCarInformation()
	{
		return DB::table('car_info')->get();
	}

	public static function getTotalCarCount()
	{
		return DB::table('car_info')->count();
	}

	

}
