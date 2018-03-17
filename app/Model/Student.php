<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Student extends Model
{
    //Student details
    use SoftDeletes;

    protected $fillable = ['user_id','date_admitted','current_class'];

    protected $dates = ['created_at','deleted_at','updated_at','date_admitted'];

    protected $hidden =[ 'password'];

    public function student(){
        return $this->belongsTo(User::class);
    }
    public function profile(){
        return 'profile_paths';
    }
    public function currentClass(){
        return $this->belongsTo('Classes','current_class');
    }

    public function subjects(){
        return $this->hasMany('subjects');
    }



}
