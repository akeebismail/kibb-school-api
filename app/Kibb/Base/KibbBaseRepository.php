<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:05 AM
 */
namespace Kibb\Kibb\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Kibb\Exceptions\KibbNotFoundException;
use Kibb\Exceptions\KibbQueryException;

class KibbBaseRepository implements BaseSchool
{
    protected $model ;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all($columns = ['*'], string $orderBy = 'id', string $sortBy = 'asc')
    {
       return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    public function create($data = [])
    {
        return $this->model->create($data);
    }

    public function update(int $id,$data = [])
    {
        return $this->find($id)->update($data);
    }

    public function find(int $id)
    {
        return $this->model->find($id);
    }

    public function findOneOrFail(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function findBy($data = [])
    {
        return $this->model->where($data)->all();
    }

    public function findOneBy($data = [])
    {
        return $this->model->where($data)->firstOrFail();
    }

    public function findOneByOrFail($data = [])
    {
        return $this->model->where($data)->firstOrFail();
    }

    public function paginateResults($data = [], int $perPage = 20)
    {
        // TODO: Implement paginateResults() method.
    }

    public function delete(int $id)
    {
        return $this->model->find($id)->delete();
    }

    protected function notFoundException(ModelNotFoundException $x){
        throw new KibbNotFoundException($x->getMessage()."\n".$x->getModel(),
            $x->getCode());
    }

    protected function queryException(QueryException $exception){

        throw new KibbQueryException($exception->getMessage()."\n".$exception->getSql(),
            $exception->getCode());
    }
}