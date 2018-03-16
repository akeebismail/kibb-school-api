<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\SchoolClass\Type\ClassTypeRepo;
use Kibb\Kibb\School\SchoolClass\Type\CreateClassTypeRequest;
use Kibb\Kibb\School\SchoolClass\Type\UpdateClassTypeRequest;

class ClassTypesController extends Controller
{
    protected $_repo;
    public function __construct(ClassTypeRepo $repo)
    {
        $this->_repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        return $this->respond($this->_repo->listTypes());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CreateClassTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateClassTypeRequest $request)
    {
        return $this->respond($this->_repo->createType($request->all()));
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
     * @param UpdateClassTypeRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateClassTypeRequest $request, $id)
    {

        return $this->respond($this->_repo->updateType($id, $request->all()));
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
        $this->_repo->delete($id);
       return $this->respondWithSuccess('successfully deleted');
    }

    /**
     * Class Type
     * @param $id
     * @return JsonResponse
     */

    public function classType($id){
       return $this->respond($this->_repo->classes($id));
    }
}
