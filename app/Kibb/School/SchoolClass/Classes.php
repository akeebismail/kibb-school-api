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
use Kibb\Kibb\School\SchoolClass\Rooms\ClassRoom;
use Kibb\Kibb\School\SchoolClass\Type\ClassType;
use Kibb\Kibb\School\Subject\Subject;

class Classes extends Model{

    protected $fillable = ['name','slug','code','level_id','class_type_id'];

    public function level(){

        return $this->belongsTo(Levels::class);
    }

    public function classType(){
        return $this->belongsTo(ClassType::class);
    }

    public function classRoom(){
        return $this->hasMany(ClassRoom::class);
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}