<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\SchoolClass\Rooms\ClassRoomRepository;
use Kibb\Kibb\School\SchoolClass\Rooms\CreateClassRoomRequest;
use Kibb\Kibb\School\SchoolClass\Rooms\UpdateClassRoomRequest;

class ClassRoomController extends Controller
{
    protected $_repo ;
    public function __construct(ClassRoomRepository $repository)
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
        return $this->respond($this->_repo->allClassRooms());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CreateClassRoomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateClassRoomRequest $request)
    {
        $rooms = $this->_repo->createRoom($request->all());
        return $this->respond($rooms);
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
     * @param UpdateClassRoomRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateClassRoomRequest $request, $id)
    {
        //
        $rooms = $this->_repo->updateRoom($id, $request->all());
        return $this->respond($rooms);
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
        if ($this->_repo->deleteRoom($id)){
            return $this->respondWithSuccess("Class Room Delete Successfully");
        }else{
            return $this->respondWithError("Sorry Cannot Delete Class Room");
        }
    }
}
