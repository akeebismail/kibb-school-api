<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 11:02 AM
 */
namespace Kibb\Kibb\School\Subject;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;
use Kibb\Model\Subject;

class SubjectRepository extends KibbBaseRepository implements SUbjectInterface
{
    public function __construct(Subject $model)
    {
        parent::__construct($model);
    }

    /** All subjects
     * @param string $order
     * @param string $sort
     * @param array $except
     * @return mixed
     */
    public function subjects(string $order = 'id', string $sort = 'desc', $except = [])
    {
        return $this->model->orderBy($order, $sort)->get()->except($except);
    }

    /**
     * Create a new Subject
     * @param array $data
     */
    public function createSubject($data = [])
    {
        try {

            $sub = $this->model;
            $sub->name = $data['name'];
            $sub->slug = str_slug($data['name'], '-');
            if (isset($data['details']) && !empty($data['name'])) {
                $sub->details = $data['details'];
            }
            $sub->level_id = $data['level_id'];
            $sub->save();
        }catch (QueryException $exception){
            return $this->queryException($exception);
        }
    }

    public function updateSubject(int $id, $data = [])
    {
        try{
            $sub = $this->model->find($id);
            $sub->name = $data['name'];
            $sub->slug = str_slug($data['name'],'-');
            $sub->details = $data['details'];
            $sub->level_id = $data['level_id'];
            $sub->update();
            return $sub;
        }catch (ModelNotFoundException $exception){
            return $this->notFoundException($exception);
        }catch (QueryException $exception){
            return $this->queryException($exception);
        }
    }

    public function deleteSubject(int $id)
    {
        try{
            return $this->model->find($id)->delete();
        }catch (QueryException $exception){
            return $this->queryException($exception);
        }
    }

    public function getSubject(int $id)
    {
        try{
            return $this->find($id);
        }catch (ModelNotFoundException $exception){
            return $this->notFoundException($exception);
        }
    }

    public function getSubjectByCode(string $code)
    {
        // TODO: Implement getSubjectByCode() method.
    }

    public function getClassSubjects(int $classId)
    {
        // TODO: Implement getClassSubjects() method.
    }

    public function getSubjectTeacher(int $teacher, int $id)
    {
        // TODO: Implement getSubjectTeacher() method.
    }

    public function getTeacherSubjects(int $teacher)
    {
        // TODO: Implement getTeacherSubjects() method.
    }

    public function getSubjectClass(int $sub, int $class_id)
    {
        // TODO: Implement getSubjectClass() method.
    }

    public function assignTeacher(int $teacher, int $sub)
    {
        // TODO: Implement assignTeacher() method.
    }

    public function getSubjectLevel(int $sub)
    {
        // TODO: Implement getSubjectLevel() method.
    }
}