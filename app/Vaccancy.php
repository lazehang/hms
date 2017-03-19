<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vaccancy extends Model
{
      protected $fillable = ['id','type','seats'];

  

      function room(){

            return $this-> belongsTo( Room::class, 'room_id');

      }

}
