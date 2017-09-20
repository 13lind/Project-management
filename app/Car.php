<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    public $table = "car_info";
    protected $fillable = [
        'make', 'model', 'rego_number', 'car_location', 'cost_per_hour', 'lat', 'long',
        'cost_per_day', 'avaliable'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
