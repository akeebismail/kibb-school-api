<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/12/18
 * Time: 9:53 PM
 */
namespace Kibb\Kibb\School\SchoolClass;

use Illuminate\Database\Eloquent\Model;
use Kibb\Kibb\School\Level\Levels;

class Classes extends Model{

    protected $fillable = ['name','slug','code','teacher_id','level_id'];

    public function level(){

        return $this->belongsTo(Levels::class);
    }
}