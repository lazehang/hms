<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','contact','address', 'school', 'profile_pic','father_name', 'father_contact'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
