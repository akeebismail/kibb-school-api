<?php

namespace Kibb\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\User\CreateUserRequest;
use Kibb\Kibb\User\UpdateUserRequest;
use Kibb\Kibb\User\UserRepository;

class UserController extends Controller
{
    protected $_repo;
    public function __construct(UserRepository $repository)
    {
        $this->_repo = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
        return $this->respond($this->_repo->users());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateUserRequest $request)
    {
        //
        //dd($request->all());
        $user = $this->_repo->createUser($request->all());

        return $this->respond($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        return $this->respond($this->_repo->getUser($id));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateUserRequest $request, $id)
    {
        //

        return $this->respond($this->_repo->updateUser($id,$request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        //
        if ($this->_repo->deleteUser($id)){
            return $this->respondWithSuccess("User Successfully deleted");
        }else{
            return $this->respondWithError("Could not delete user");
        }
    }
}
