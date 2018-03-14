<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 7:42 PM
 */
namespace Kibb\Kibb\School\SchoolClass\Type;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;

class ClassTypeRepo extends KibbBaseRepository implements ClassTypeInterface{
    protected $model;
    public function __construct(ClassType $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function listTypes(string $order= 'id', string $sort = 'desc'){
        return $this->model->orderBy($order,$sort)->get();
    }
    public function createType($data = [])
    {
        try {
            $type = [];
            $type['name'] = $data['name'];
            $type['slug'] = str_slug($data['name'], '-');
            $type['level_id'] = $data['level'];
            $type['description'] = $data['description'];
            return $this->create($type);
        }catch (QueryException $exception){
            throw new ClassTypeException(
                $exception->getMessage().' '.$exception->getSql(),
                $exception->getCode()
            );
        }
    }

    public function updateType(int $id,$data = [])
    {
        $type = [];
        $type['name'] = $data['name'];
        $type['slug'] = str_slug($data['name'],'-');
        $type['description'] = $data['description'];
        return $this->find($id)->update($type);
    }

    public function levels()
    {
        return $this->model->level;
    }

    public function classes(int $id)
    {
        return $this->find($id)->classes;
    }
    public function attachTypeLevel()
    {

    }
}