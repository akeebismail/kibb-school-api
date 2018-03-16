<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 12:37 PM
 */
namespace Kibb\Kibb\User;

use Kibb\Kibb\Base\BaseSchool;

interface UserInterface extends BaseSchool{

    public function users(string $order ='id',string $sort = 'desc',$except =[]);
    public function createUser($data = []);

    public function updateUser(int $id, $data = []);

    public function getUser(int $id);

    public function deleteUser(int $id);

    public function userAccount(int $id);

}