<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassType extends Model
{
    //
    use SoftDeletes;
    protected $fillable =['name','slug','description','level_id'];

    public function level(){
        return $this->belongsTo(Levels::class);
    }
   public function classes(){
        return $this->hasMany(Classes::class);
   }

}
