<?php

namespace Kibb\Kibb\School\Subject;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kibb\Kibb\School\Level\Levels;
use Kibb\Kibb\School\SchoolClass\Classes;

class Subject extends Model
{
    use SoftDeletes;
    //
    protected $fillable = ['name','slug','details','level_id'];

    public function level(){
        return $this->belongsTo(Levels::class);
    }

    public function classes(){
        return $this->belongsToMany(Classes::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
