<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payment;
use DB;

use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{

	protected $redirectTo = '/profile';

	public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        return view('payment');
    }

    public function store() 
    {
        $user = Auth::user();

        $card_info = new Payment;
        $card_info->id = $user->id;
        $card_info->card_type = request('card_type');;
        $card_info->card_number = request('card_number');
        $card_info->exp_date = request('exp_date');
        $card_info->CVV = request('CVV');
        $card_info->save();

        return redirect('/payment');
    }

    public static function getID()
    {
        $user = Auth::user();
        $user_id = DB::table('payments')->get()->where('id', '=', $user->id);
        

    



        foreach ($user_id as $user) {
            if (strcmp($user->card_type, 'mastercard') == 0) {
                $imageName = 'images/mastercard.jpeg';
            } else {
                $imageName = 'images/visa.jpeg';
            }

            echo  "<img src='$imageName'> " . "Card Number: " . "•••• " . substr($user->card_number, -4) . " Exp. Date: " . $user->exp_date;
            echo "<br>";

        }

           
           
            
            

        return;
    }

    public static function delete() 
    {
        $user = Auth::user();
        DB::table('payments')->where('id', '=', $user->id)->delete();

        return;
    }   

    
}
