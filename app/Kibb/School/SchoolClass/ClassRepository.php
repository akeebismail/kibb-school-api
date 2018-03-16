<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 10:29 AM
 */
namespace Kibb\Kibb\School\SchoolClass;

use function GuzzleHttp\Psr7\str;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;

class ClassRepository extends KibbBaseRepository implements ClassInterface {
    protected $model;

    public function __construct(Classes$model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
    public function classes(string  $order = 'id',string $sort =' desc', $except =[]){
        return $this->model->find($order, $sort)->get();
    }
    public function createClass($data =[]){
        try{
            $class = [];
            $class['name'] = $data['name'];
            $class['slug'] = str_slug($data['name']);
            $class['code'] = $data['code'];
            $class['level_id']  = $data['level'];
            $class['class_type_id'] = $data['class_type'];
            return $this->create($class);
        }catch (QueryException $exception){
            throw new ClassExectionHandler($exception->getMessage().' '.$exception->getSql(),$exception->getCode());
        }
    }

    public function updateClass(int $id,$data = []){
        try{
            $class = $this->model->find($id);
            $class->name = $data['name'];
            $class->slug = str_slug($data['name'],'-');
            $class->code = $data['code'];
            $class->level_id = $data['level'];
            $class->class_type_id = $data['class_type'];
            $class->update();
            return $class;
        }catch (QueryException $exception){
            throw new ClassExectionHandler($exception->getMessage().' '.$exception->getSql(),$exception->getCode());
        }
    }

    public function getClass(int $id){

        return $this->find($id);
    }

    public function delete(int $id)
    {
        return $this->model->find($id)->delete();
    }

    public function classType( int $id){
        return $this->model->find($id)->classType;
    }

}