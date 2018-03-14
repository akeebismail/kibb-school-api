<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 10:29 AM
 */
namespace Kibb\Kibb\School\SchoolClass;

use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;

class ClassRepository extends KibbBaseRepository implements ClassInterface {
    protected $model;

    public function __construct(Classes$model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function createClass($data =[]){
        try{
            return $this->create($data);
        }catch (QueryException $exception){
            throw new ClassExectionHandler($exception->getMessage().' '.$exception->getSql(),$exception->getCode());
        }
    }

    public function updateClass(int $id,$data = []){
        try{
            return $this->find($id)->update($data);
        }catch (QueryException $exception){
            throw new ClassExectionHandler($exception->getMessage().' '.$exception->getSql(),$exception->getCode());
        }
    }

}