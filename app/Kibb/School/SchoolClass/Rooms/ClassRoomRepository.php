<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 9:19 AM
 */
namespace Kibb\Kibb\School\SchoolClass\Rooms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;

class ClassRoomRepository extends KibbBaseRepository implements ClassRoomInterface{
    public function __construct(ClassRoom $model)
    {
        parent::__construct($model);
    }

    public function allClassRooms(string $order = 'id', string $sort = 'desc', $except = [])
    {
        return $this->model->orderBy($order, $sort)->get()->except($except);
    }

    public function createRoom($data = [])
    {
        $room = [];
        $room['class_id'] = $data['class_id'];
        $room['name'] = $data['name'];
        $room['slug'] = str_slug($data['name'],'-');
        $room['code'] = $data['code'];
        $room['teacher_id'] = !isset($data['teacher_id']) ? $data['teacher_id'] : 0;
        try {
            return $this->create($room);
        }catch (QueryException $exception){
            throw new ClassRoomException(
            $exception->getMessage().'  '.$exception->getSql()
        );
        }

    }

    public function updateRoom(int $id, $data = [])
    {
        try{
           $room = $this->model->find($id);
           $room->name = $data['name'];
           //$room->slug = str_slug($data['name'],'-');
           $room->class_id = $data['class_id'];
           $room->code = $data['code'];
           $room->teacher_id = !isset($data['teacher_id'])? $data['teacher_id'] : 0;
           $room->update();
           return $room;
        }catch (QueryException $exception){
            return $this->exceptions($exception);
        }
    }

    public function teacher()
    {
        // TODO: Implement teacher() method.
    }

    public function classTo()
    {
        // TODO: Implement classTo() method.
    }

    public function students()
    {
        // TODO: Implement students() method.
    }

    public function deleteRoom(int $id)
    {
        try{
            return $this->model->find($id)->delete();
        }catch (QueryException $exception){
            return $this->exceptions($exception);
        }
    }

    private function exceptions(QueryException $exception){
        throw new ClassRoomException(
            $exception->getMessage().'  '.$exception->getSql(),
            $exception->getCode()
        );
    }
}