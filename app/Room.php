<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['room_id', 'type'];
    protected $primaryKey = 'room_id';
    function vaccancies() {

        return $this->hasMany(Vaccancy::class);

    }
    public function students() {
        return $this->belongsToMany('App\Student', 'stdroom', 'room_id', 'std_id');
    }
}
