<?php

namespace Kibb\Kibb;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //

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
