<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 7:42 PM
 */
namespace Kibb\Kibb\School\SchoolClass\Type;

use Illuminate\Database\Eloquent\Model;
use Kibb\Kibb\Base\KibbBaseRepository;

class ClassTypeRepo extends KibbBaseRepository implements ClassTypeInterface{

    public function __construct(ClassType $model)
    {
        parent::__construct($model);
    }

    public function createType($data = [])
    {
        return $this->create($data);
    }

    public function updateType($data = [])
    {
        return $this->update();
    }

    public function levels()
    {
        return $this->model->levels;
    }

    public function classes()
    {
    }
}