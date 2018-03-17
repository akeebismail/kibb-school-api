<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Levels extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['name','slug','details'];

    protected $hidden = ['created_at','updated_at','deleted_at'];
    public function classes(){
        return $this->hasMany(Classes::class);
    }

}
