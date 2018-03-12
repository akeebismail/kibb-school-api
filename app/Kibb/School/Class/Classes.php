<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/12/18
 * Time: 9:53 PM
 */
namespace Kibb\Kibb\School;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model{

    protected $fillable = [];

    public function classType(){

        return $this->belongsTo(ClassType::class);
    }
}