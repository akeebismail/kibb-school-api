<?php

namespace Kibb\Kibb\Student;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //Student details


    protected $fillable = [];

    protected $dates = ['created_at','deleted_at','updated_at','joined_at'];

    protected $hidden =[ 'password'];

    public function profile(){
        return 'profile_paths';
    }

    public function currentClass(){

    }

    public function subjects(){}



}
