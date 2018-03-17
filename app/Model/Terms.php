<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terms extends Model
{
    //
    use SoftDeletes;
    protected $fillable =['name','slug','session_id',
        'start_day','end_day','notification'];

    public function session(){
        return $this->belongsTo(Session::class);
    }
}
