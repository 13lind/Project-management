<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
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
            return view('adminmenu');
        else {
            return redirect('/');
        }
    }

    public function addcar()
    {
        if(Auth::user()->isAdmin())
            return view('addcar');
        else {
            return redirect('/');
        }
    }

    public function removecar()
    {
        if(Auth::user()->isAdmin())
            return view('removecar');
        else {
            return redirect('/');
        }
    }


    public function store(Request $request)
    {

        $this->validate($request,[

                'make' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'rego_number' => 'required|alpha_dash|max:8',
                'street_address' => 'required|max:255|regex:/^[a-zA-Z0-9\-\s]+$/',
                'suburb' => 'required|alpha|max:255',
                'postcode' => 'required|numeric|digits_between:4,4',
                'cost_per_hour' => 'required|max:255|regex:/^\d*(\.\d{1,2})?$/',
                'cost_per_day' => 'required|max:255|regex:/^\d*(\.\d{1,2})?$/',

            ]);
        


        $car_location = $request['street_address'] . ", " . $request['suburb'] . " " . $request['state'] . " " . $request['postcode'];

        Car::create([
            

            'make' => $request['make'],
            'model' => $request['model'],
            'rego_number' => $request['rego_number'],
            'car_location' => $car_location,
            'cost_per_hour' => $request['cost_per_hour'],
            'cost_per_day' => $request['cost_per_day'],             
            'lat' => $request['lat'],
            'long' => $request['long'],
            'avaliable' => true,
            
            
        ]);

        return redirect('/admin');
    }

    public function delete()
    {

        $car_id = request('selectedCarID');
        DB::table('car_info')->where('id', '=', $car_id)->delete();

        return redirect('/admin');


    }



}
