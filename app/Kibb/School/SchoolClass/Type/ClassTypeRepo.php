<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 7:42 PM
 */
namespace Kibb\Kibb\School\SchoolClass\Type;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;
use Kibb\Model\ClassType;

class ClassTypeRepo extends KibbBaseRepository implements ClassTypeInterface{
    protected $model;
    public function __construct(ClassType $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function types(string $order= 'id', string $sort = 'desc'){
        return $this->model->orderBy($order,$sort)->get();
    }
    public function type(int $id){
        return $this->find($id);
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
            return $this->queryException($exception);
        }
    }

    public function updateType(int $id,$data = [])
    {
        try {
            $type = $this->model->find($id);
            $type->name = $data['name'];
            $type->slug = str_slug($data['name'], '-');
            $type->description = $data['description'];
            return $type->update();
        }catch (ModelNotFoundException $exception){
            return $this->notFoundException($exception);
        }catch (QueryException $exception){
            return $this->queryException($exception);
        }
    }

    public function levels()
    {
        return $this->model->level;
    }

    public function classes(int $id)
    {
        return $this->model->find($id)->classes;
    }
    public function attachTypeLevel()
    {

    }
}