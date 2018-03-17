<?php

namespace Kibb\Http\Controllers\School;

use function GuzzleHttp\Psr7\str;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Http\Requests\Kibb\LevelRequest;
use Kibb\Http\Resources\LevelResource;
use Kibb\Kibb\School\Level\LevelRepository;

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
     * @return JsonResponse
     */
    public function index()
    {
        //all
        //return route('levels.update',1);
        //return $this->respond($this->_repo->levels());
        return $this->respond(new LevelResource($this->_repo->levels()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LevelRequest $request
     * @return JsonResponse
     */
    public function store(LevelRequest $request)
    {
        //

        $data = [];
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name,'-');
        $data['details'] = $request->details;
        $repo = $this->_repo->createLevel($data);

        return $this->respond(new LevelResource($repo));

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

    /**
     * Get All the classes associated with a level
     * @param $id
     * @return LevelResource
     */
    public function levelClasses($id) :LevelResource
    {
        return new LevelResource($this->_repo->levelClasses($id));
       // return $this->respond($this->_repo->levelClasses($id));
    }
}
