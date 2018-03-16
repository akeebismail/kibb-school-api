<?php

namespace Kibb\Kibb\School\Term;

use Illuminate\Database\Eloquent\Model;
use Kibb\Kibb\School\Session\Session;

class Terms extends Model
{
    //
    protected $fillable =['name','slug','session_id',
        'start_day','end_day','notification'];

    public function session(){
        return $this->belongsTo(Session::class);
    }
}
