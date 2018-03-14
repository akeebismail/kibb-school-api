<?php

namespace Kibb\Kibb\School\SchoolClass\Type;

use Illuminate\Database\Eloquent\Model;
use Kibb\Kibb\School\Level\Levels;
use Kibb\Kibb\School\SchoolClass\Classes;

class ClassType extends Model
{
    //
    protected $fillable =['name','slug','description','level_id'];

    public function level(){
        return $this->belongsTo(Levels::class);
    }
   public function classes(){
        return $this->hasMany(Classes::class);
   }

}
