<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 7:48 PM
 */
namespace Kibb\Kibb\School\Level;

use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;

class LevelRepository extends KibbBaseRepository implements LevelInterface{

    public function createLevel($data = [])
    {
        try{
            return $this->create($data);
        }catch (QueryException $exception){
            throw new LevelExceptions($exception->getMessage().' '.$exception->getSql(),$exception->getCode());
        }
    }

    public function updateLevel(int $id, $data = [])
    {
        try{
            return $this->model->find($id)->update($data);
        }catch (QueryException $exception){
            throw new LevelExceptions(
                $exception->getMessage().' '.$exception->getSql(),
                $exception->getCode()
            );
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
        // TODO: Implement attachClassTypeToLevel() method.
    }

    public function deleteLevel(int $id)
    {
        try{
            return $this->delete($id);
        }catch (QueryException $exception){
            throw new LevelExceptions(
                $exception->getMessage().'  '. $exception->getSql(),
                $exception->getCode()
            );
        }
    }
}