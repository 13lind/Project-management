<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table = "car_bookings";
    protected $fillable = [
        'car_used', 'rego_number', 'car_location','date_from',
        'time_from', 'date_to', 'time_to', 'total_cost', 'cost_per_hour', 'cost_per_day', 'completed'
    ];
}


