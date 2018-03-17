<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\SchoolClass\ClassRepository;
use Kibb\Http\Requests\Kibb\ClassRequest;

class ClassesController extends Controller
{
    protected $_repo;
    public function __construct(ClassRepository $repository)
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
        return $this->respond($this->_repo->all());

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param ClassRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ClassRequest $request)
    {
        //
        return $this->respond($this->_repo->createClass($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        //
        return $this->respond($this->_repo->find($id));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param ClassRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ClassRequest $request, $id)
    {
        return $this->respond($this->_repo->updateClass($id,$request->all()));
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
        if ($this->_repo->delete($id)){
            return $this->respondWithSuccess("Class Deleted Successfully");
        }else{
            return $this->respondWithError("Class Could not be deleted");
        }
    }
}
