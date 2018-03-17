<?php

namespace Kibb\Http\Controllers\School;

use function GuzzleHttp\Psr7\str;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\Level\CreateLevelRequest;
use Kibb\Kibb\School\Level\LevelRepository;
use Kibb\Kibb\School\Level\LevelRequest;

class LevelsController extends Controller
{
    protected $_repo;

    public function __construct(LevelRepository $repository)
    {
        $this->_repo = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        //all
        //return route('levels.update',1);
        return $this->respond($this->_repo->listLevel());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateLevelRequest $request
     * @return JsonResponse
     */
    public function store(CreateLevelRequest $request)
    {
        //

        $data = [];
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name,'-');
        $data['details'] = $request->details;
        $repo = $this->_repo->createLevel($data);

        return $this->respond($repo);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return JsonResponse
     */
    public function show($id) : JsonResponse
    {
        //
        return $this->respond($this->_repo->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param LevelRequest $request
     * @param  int $id
     * @return mixed
     */
    public function update(LevelRequest $request, $id)
    {
        //
         return $this->respond($this->_repo->updateLevel($id,$request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id) : JsonResponse
    {
        //
        if ($this->_repo->deleteLevel($id)){

            return $this->respondWithSuccess('Level Successfully Deleted');
        }
        return $this->respondNotFound();
    }
}
