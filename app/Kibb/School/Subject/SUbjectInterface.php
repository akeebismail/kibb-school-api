<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 10:55 AM
 */
namespace Kibb\Kibb\School\Subject;

use Kibb\Kibb\Base\BaseSchool;

interface SUbjectInterface extends BaseSchool{

    public function subjects(string $order = 'id',string $sort = 'desc', $except =[]);

    public function createSubject($data = []);

    public function updateSubject(int $id, $data = []);

    public function deleteSubject(int $id);

    public function getSubject(int $id);

    public function getSubjectByCode(string $code);

    public function getClassSubjects(int $classId);

    public function getSubjectTeacher(int $teacher, int $id);

    public function getTeacherSubjects(int $teacher);

    public function getSubjectClass(int $sub, int $class_id);

    public function assignTeacher(int $teacher, int $sub);

    public function getSubjectLevel(int $sub);
}