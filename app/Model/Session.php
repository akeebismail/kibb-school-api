<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Session extends Model
{
    use SoftDeletes;
    //
    protected $fillable = ['name','slug','start_day','end_day','notification'];


    public function terms(){
        return $this->hasMany(Terms::class);
    }
}
