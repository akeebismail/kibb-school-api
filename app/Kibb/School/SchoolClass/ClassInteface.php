<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 10:26 AM
 */
namespace Kibb\Kibb\School\SchoolClass;

use Kibb\Kibb\Base\BaseSchool;

interface ClassInteface extends BaseSchool{

    public function createClass($data = []);
    public function updateClass($data =[]);

}