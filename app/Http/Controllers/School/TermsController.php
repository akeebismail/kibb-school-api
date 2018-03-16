<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\Term\TermCreateRequest;
use Kibb\Kibb\School\Term\TermRepository;
use Kibb\Kibb\School\Term\UpdateTermRequest;

class TermsController extends Controller
{

    public function __construct(TermRepository $repository)
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
        return $this->respond($this->_repo->terms());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param TermCreateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TermCreateRequest $request)
    {
        $data = [];
        $data['name'] = $request->name;
        $data['slug'] = str_slug($request->name,'-');
        $data['session_id'] = $request->session_id;
        $data['start_day'] = $request->start_day;
        $data['end_day'] = $request->end_day;
        $data['notification'] = str_random(100);

        return $this->respond($this->_repo->createTerms($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param UpdateTermRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTermRequest $request, $id)
    {
        //
       return $this->respond( $this->_repo->updateTerm($id, $request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if ($this->_repo->deleteTerm($id)){
            return $this->respondWithSuccess('term successfully destroyed');
        }
    }

    public function termSession($id){
        return $this->respond($this->_repo->termSession($id));
    }
}
