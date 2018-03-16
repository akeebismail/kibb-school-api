<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\SchoolClass\ClassRepository;
use Kibb\Kibb\School\SchoolClass\CreateClassRequest;

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
     * @param CreateClassRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateClassRequest $request)
    {
        //
        return $this->respond($this->_repo->createClass($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
