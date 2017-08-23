<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'card_number', 'exp_date', 'CVV',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'CVV', 'remember_token',
    ];
}
