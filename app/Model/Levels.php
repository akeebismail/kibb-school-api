<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Levels extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['name','slug','details'];

    public function classes(){
        return $this->hasMany(Classes::class);
    }

}
