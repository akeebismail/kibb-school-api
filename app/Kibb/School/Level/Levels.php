<?php

namespace Kibb\Kibb\School\Level;

use Illuminate\Database\Eloquent\Model;
use Kibb\Kibb\School\SchoolClass\Classes;

class Levels extends Model
{
    //
    protected $fillable = ['name','slug','details'];

    public function classes(){
        return $this->hasMany(Classes::class);
    }

}
