<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:51 AM
 */
namespace Kibb\Kibb\School\Term;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;

class TermRepository extends KibbBaseRepository implements TermInterface
{
    protected $model;
    public function __construct(Terms $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function createTerms($data = [])
    {
        try{
            return $this->create($data);
        }catch (QueryException $exception){
            throw new TermException($exception->getMessage(),$exception->getCode());
        }
    }

    public function updateSession($data = [])
    {
        // TODO: Implement updateSession() method.
    }

    public function deleteTerms(int $id)
    {
        // TODO: Implement deleteTerms() method.
    }

    public function termSessions()
    {
        // TODO: Implement termSessions() method.
    }

    public function currentSessionTerm()
    {
        // TODO: Implement currentSessionTerm() method.
    }

    public function currentTerm()
    {
        // TODO: Implement currentTerm() method.
    }
}