<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['name','address','state','country','slogan','details',
        'about','mission',
    ];
}
