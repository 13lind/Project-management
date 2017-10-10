<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->isAdmin())
            return view('addcar');
        else {
            return redirect('/home');
        }
    }

    public function store()
    {
        

        $car_info = new Car;
		$car_info->make = request('make');
		$car_info->model = request('model');
		$car_info->rego_number = request('rego_number');

		$car_street_address = request('street_address');
		$car_city = request('city');
		$car_suburb = request('suburb');
		$car_postcode = request('postcode');

		$car_info->car_location = $car_street_address . ", " . $car_city . " " . $car_suburb . " " . $car_postcode;
		$car_info->cost_per_hour = request('cost_per_hour');
		$car_info->cost_per_day = request('cost_per_day');
		$car_info->avaliable = true;

        $car_info->save();

        return redirect('/home');
    }



}
