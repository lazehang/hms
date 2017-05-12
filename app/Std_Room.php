<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Std_Room extends Model
{
    protected $table = 'stdroom';
    protected $fillable = ['id','std_id','room_id'];
}
