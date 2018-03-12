<?php

namespace Kibb\Kibb\School;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = ['name','address','state','country','slogan','details',
        'about','mission',
    ];
}
