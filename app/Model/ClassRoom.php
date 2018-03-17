<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassRoom extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['class_id','name','code','teacher_id'];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function classTo(){
        return $this->belongsTo(Classes::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
}
