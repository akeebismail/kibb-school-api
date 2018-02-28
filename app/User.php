<?php

namespace Kibb;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kibb\Kibb\Admin\Admin;
use Kibb\Kibb\School\School;
use Kibb\Kibb\Student\Student;
use Kibb\Kibb\Teacher\Teacher;

class User extends Authenticatable
{
    use Notifiable , SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name','mid_name','date_of_birth', 'email', 'password','phone'
        ,'address','state','country',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['date_of_birth','created_at','updated_at','deleted_at'];
    public function account($name){
        switch ($name){
            case 'student':
                return $this->hasOne(Student::class);
                break;
            case 'teacher':
                return $this->hasOne(Teacher::class);
                break;
            case 'admin':
                return $this->hasOne(Admin::class);
                break;
            default :
                return $this->hasOne(School::class);
        }

        //return $this->belongsTo(School::class);
    }


}
