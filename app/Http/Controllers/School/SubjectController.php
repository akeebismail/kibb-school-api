<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Kibb\School\Subject\CreateSubjectRequest;
use Kibb\Kibb\School\Subject\SubjectRepository;
use Kibb\Kibb\School\Subject\UpdateSubjectRequest;

class SubjectController extends Controller
{
    protected $_repo ;

    public function __construct(SubjectRepository $repository)
    {
        $this->_repo = $repository;
    }

    /**
     * All Subjects in the school.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
        return $this->respond($this->_repo->subjects());
    }

    /**
     * Store a newly created Subject in storage.
     *
     * @param CreateSubjectRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateSubjectRequest $request)
    {
        $subjects = $this->_repo->createSubject($request->all());
        return $this->respond($subjects);
    }

    /**
     * get a subject resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        //
        return $this->respond($this->_repo->getSubject($id));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param UpdateSubjectRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateSubjectRequest $request, $id)
    {
        $sub = $this->_repo->updateSubject($id,$request->all());

        return $this->respond($sub);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if ($this->_repo->deleteSubject($id)){
            return $this->respondWithSuccess("subject Deleted Success fully");
        }
    }
}
