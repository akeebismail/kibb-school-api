<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 12:37 PM
 */
namespace Kibb\Kibb\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;
use Kibb\Model\User;


class UserRepository extends KibbBaseRepository implements UserInterface
{
    protected $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }


    public function users(string $order = 'id', string $sort = 'desc', $except = [])
    {
        return $this->model->orderby($order,$sort)->get()->except($except);
    }

    public function createUser($data = [])
    {

        try{
            $user = $this->model;
            $user->first_name = $data['firstname'];
            $user->last_name = $data['lastname'];
            $user->mid_name = $data['midname'];
            $user->date_of_birth = $data['dob'];
            $user->email = $data['email'];
            $user->username = $data['username'];
            $user->password = bcrypt($data['password']);
            $user->phone  = $data['phone'];
            $user->contact = $data['contact'];
            $user->address = $data['address'];
            $user->state = $data['state'];
            $user->country = $data['country'];
            $user->status = 1;
            $user->save();
            //attached user to account
            return $user;
        }catch (QueryException $exception){
            return $this->queryException($exception);
        }
    }

    public function updateUser(int $id, $data = [])
    {
        try{
            $user = $this->model->find($id);
            $user->first_name = $data['firstname'];
            $user->last_name = $data['lastname'];
            $user->mid_name = $data['midname'];
            $user->date_of_birth = $data['dob'];
            $user->email = $data['email'];
            $user->username = $data['username'];
            $user->password = bcrypt($data['password']);
            $user->phone  = $data['phone'];
            $user->contact = $data['contact'];
            $user->address = $data['address'];
            $user->state = $data['state'];
            $user->country = $data['country'];
            $user->status = 1;
            $user->update();
            //attached user to account
            return $user;
        }catch (QueryException $exception){
            return $this->queryException($exception);
        }
    }

    public function getUser(int $id)
    {
        try{
            return $this->findOneOrFail($id);
        }catch (ModelNotFoundException $exception){
            return $this->notFoundException($exception);
        }
    }

    public function deleteUser(int $id)
    {
        try{
            return $this->model->find($id)->delete();
        }catch (QueryException $ex){
            return $this->queryException($ex);
        }catch (ModelNotFoundException $exception){
            return $this->notFoundException($exception);
        }
    }

    public function userAccount(int $id)
    {
        $user = $this->getUser($id);
        return $this->model->account($user->first_name);
    }
}