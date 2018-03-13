<?php

namespace Kibb\Kibb\School\Term;

use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    //
    protected $fillable =['name','slug','session_id',
        'start_day','end_day','notification'];
}
