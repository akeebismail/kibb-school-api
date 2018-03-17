<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\Session\CreateSessionRequest;
use Kibb\Kibb\School\Session\SessionRepo;
use Kibb\Kibb\School\Session\SessionRequest;

class SessionsController extends Controller
{
    protected $_repo ;

    public function __construct(SessionRepo $repo)
    {
        $this->_repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $this->respond($this->_repo->sessions());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CreateSessionRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateSessionRequest $request) :JsonResponse
    {
        //
        $data = [];
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name,'-');
        $data['start_day'] = $request->start_day;
        $data['end_day'] = $request->end_day;
         return $this->respond($this->_repo->createSession($data));

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
     * @param SessionRequest $request
     * @param  int $id
     * @return JsonResponse
     */
    public function update(SessionRequest $request, $id)
    {
        //
        $session = $this->_repo->updateSession($id,$request->all());
        return $this->respond($session);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        if ($this->_repo->deleteSession($id)){
            return $this->respondWithSuccess("Session Deleted");
        }else{
            return $this->respondWithError("Session could not be deleted");
        }
    }
    /**
     * Session Terms
     * @param int $id
     * @return JsonResponse
     */

    public function sessionTerms($id){
        return $this->respond($this->_repo->sessionTerms($id));
    }
}
