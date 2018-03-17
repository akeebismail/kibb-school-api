<?php

namespace Kibb\Http\Controllers\School;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Kibb\Http\Controllers\Controller;
use Kibb\Http\Requests\Kibb\SubjectRequest;
use Kibb\Kibb\School\Subject\SubjectRepository;
use Kibb\Model\Classes;
use Kibb\Model\Subject;

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
     * @param SubjectRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SubjectRequest $request)
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
     * @param SubjectRequest $request
     * @param  int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SubjectRequest $request, $id)
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
        return $this->respondWithError("Sorry Could not delete the subject");
    }

    /**Fetch all subjects that belong to the class
     * @param $id Classes
     * @return JsonResponse
     */
    public function classSubject($id){
        return $this->respond($this->_repo->getClassSubjects($id));
    }

    /** Get the class a subject belong to
     * @param $id
     * @param $class
     * @return JsonResponse
     */
    public function subjectClass($id, $class) : JsonResponse{

        return $this->respond($this->_repo->getSubjectClass($id,$class));
    }

    /**
     * Get the Teacher Assigned to a subject
     * @param Subject $id
     * @return JsonResponse
     */
    public function getTeacher($id): JsonResponse{
        return $this->respond($this->_repo->getTeacherSubjects($id));
    }

    /**
     * Upload cover avatar for a subject
     * @param $request
     * @return JsonResponse
     */
    public function uploadSubjectAvatar($request) : JsonResponse{

    }

    /**
     * Assign a subject to a teacher
     * @param $id
     * @param $teacher
     * @return JsonResponse
     */
    public function assignToTeacher($id, $teacher) : JsonResponse{

    }
}
