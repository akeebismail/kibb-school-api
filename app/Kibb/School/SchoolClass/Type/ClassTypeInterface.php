<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 7:41 PM
 */
namespace Kibb\Kibb\School\SchoolClass\Type;

use Kibb\Kibb\Base\BaseSchool;

interface ClassTypeInterface extends BaseSchool
{
    public function createType($data =[]);

    public function updateType($data =[]);

    public function levels();

    public function classes();
}