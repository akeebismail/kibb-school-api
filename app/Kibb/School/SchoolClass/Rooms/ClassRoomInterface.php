<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 9:15 AM
 */

namespace Kibb\Kibb\School\SchoolClass\Rooms;

use Kibb\Kibb\Base\BaseSchool;

interface ClassRoomInterface extends BaseSchool{

    public function rooms(string $order = 'id', string $sort = 'desc', $except =[]);

    public function room(int $id);
    public function createRoom($data = []);

    public function updateRoom(int $id,$data =[]);

    public function teacher();
    public function classTo();

    public function students();

    public function deleteRoom(int $id);
}