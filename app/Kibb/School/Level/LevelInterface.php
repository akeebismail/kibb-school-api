<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 7:48 PM
 */
namespace Kibb\Kibb\School\Level;

use Kibb\Kibb\Base\BaseSchool;

interface LevelInterface extends BaseSchool{

    public function createLevel($data = []);

    public function updateLevel(int $id, $data = []);

    public function levelClasses(int $id);

    public function attachClassToLevel(int $id);

    public function attachClassTypeToLevel(int $id);

    public function deleteLevel(int $id);
}