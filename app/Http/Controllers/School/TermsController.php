<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Http\Requests\Kibb\TermRequest;
use Kibb\Kibb\School\Term\TermRepository;

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
     * Store a new Term
     *
     * @param TermRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TermRequest $request)
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
     * @param TermRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(TermRequest $request, $id)
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

    /**Get Term in Session
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function termSession($id){
        return $this->respond($this->_repo->termSession($id));
    }

    /**
     * Start a new term for the session
     * @param $id
     */
    public function startNewTerm($id){

    }

    /**
     * End the current term
     * @param $id
     */
    public function endTerm($id){

    }
}
