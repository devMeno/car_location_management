<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable=[
        'car',
        'user_id',
        'phone_number',
        'date',
        'number_of_days',
        'number_of_car',
    ];
}
