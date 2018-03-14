<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\Term\TermCreateRequest;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('term/create');
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
