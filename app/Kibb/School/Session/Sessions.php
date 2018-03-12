<?php

namespace Kibb\Kibb\School\Session;

use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    //
    protected $fillable = ['name','slug','start_day','end_day','notification'];


    public function terms(){
        return $this->hasMany(Terms::class);
    }
}
