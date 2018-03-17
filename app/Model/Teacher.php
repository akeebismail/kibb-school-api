<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    //
    use SoftDeletes;
    protected $fillable =[];

    protected $dates =[];

    protected $hidden;

    public function profile(){
        return 'teacher';
    }

    public function classAssigned(){

    }

    public function subjectAssigned(){

    }

    public function subjects(){

    }
}
