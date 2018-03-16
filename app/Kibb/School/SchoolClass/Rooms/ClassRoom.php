<?php

namespace Kibb\Kibb\School\SchoolClass\Rooms;

use Illuminate\Database\Eloquent\Model;
use Kibb\Kibb\School\SchoolClass\Classes;
use Kibb\Kibb\Student\Student;
use Kibb\Kibb\Teacher\Teacher;

class ClassRoom extends Model
{
    //
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
