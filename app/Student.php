<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'std_id';
    protected $fillable = ['name','contact','address', 'school', 'profile_pic','father_name', 'father_contact'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function rooms(){
        return $this->belongsToMany('App\Room', 'stdroom', 'std_id', 'room_id');
    }
    public function hasAnyRoom($rooms)
    {
        if (is_array($rooms)) {
            foreach ($rooms as $room) {
                if ($this->hasRoom($room)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRoom($rooms)) {
                return true;
            }
        }
        return false;
    }

    public function hasRoom($room){
        if($this->rooms()->where('type', $room)->first())
        {
            return true;
        }
        return false;
    }
}
