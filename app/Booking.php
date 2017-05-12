<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['vaccancy_id', 'name', 'contact', 'email', 'message'];
}
