<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 10:26 AM
 */
namespace Kibb\Kibb\School\SchoolClass;

use Kibb\Kibb\Base\BaseSchool;

interface ClassInterface extends BaseSchool{

    public function classes(string  $order = 'id',string $sort =' desc', $except =[]);
    public function createClass($data = []);

    public function updateClass(int $id,$data =[]);

    public function getClass(int $id);

    public function classType(int $id );
}
