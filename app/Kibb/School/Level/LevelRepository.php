<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 7:48 PM
 */
namespace Kibb\Kibb\School\Level;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Kibb\Exceptions\KibbNotFoundException;
use Kibb\Exceptions\KibbQueryException;
use Kibb\Kibb\Base\KibbBaseRepository;
use Kibb\Model\Levels;

class LevelRepository extends KibbBaseRepository implements LevelInterface{
    protected $model;

    public function __construct(Levels $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function createLevel($data = [])
    {
        try{
            return $this->create($data);
        }catch (QueryException $exception){
            $this->queryException($exception);
        }
    }

    /**
     * @param int $id
     * @param array $data
     */
    public function updateLevel(int $id, $data = [])
    {
        try{
            $level = [];
            $level['name'] = $data['name'];
            $level['details'] = $data['details'];
            return $this->model->find($id)->update($level);
        }catch (QueryException $exception){
            return $this->queryException($exception);
        }
    }

    public function levelClasses(int $id)
    {
        // TODO: Implement levelClasses() method.
    }

    public function attachClassToLevel(int $id)
    {
        // TODO: Implement attachClassToLevel() method.
    }

    public function attachClassTypeToLevel(int $id)
    {

    }

    /**
     * @param int $id
     */
    public function deleteLevel(int $id)
    {
        try{
            return $this->model->find($id)->delete();
        }catch (QueryException $exception){
            return $this->queryException($exception);
        } catch (ModelNotFoundException $e) {
            return $this->notFoundException($e);
        }
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $except
     * @return mixed
     */
    public function levels(string $order = 'id', string $sort = 'desc', $except = [])
    {
        return $this->model->orderBy($order, $sort)->get()->except($except);
    }

    /**
     * @param int $id
     */
    public function level(int $id)
    {
     try{
         return $this->find($id);
     }  catch (ModelNotFoundException $exception){
         return $this->notFoundException($exception);
     }
    }

}