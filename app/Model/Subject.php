<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
