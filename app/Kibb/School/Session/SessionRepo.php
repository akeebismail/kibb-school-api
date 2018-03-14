<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:30 AM
 * Session Repository
 *
 */
namespace Kibb\Kibb\School\Session;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;

class SessionRepo extends KibbBaseRepository implements SessionInterface
{

    protected $model ;
    public function __construct(Sessions $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * create school session, start day must be greater end day
     * @param array $data
     * @return bool
     */
    public function createSession($data = [])
    {
        try{
            return $this->create($data);
        }catch (QueryException $exception){
            throw new CreateSessionException("Unable to create School Session");
        }
    }

    /**
     * update Current School session
     * @param array $data
     * @return bool
     */
    public function updateSession($data = [])
    {
        try{
            return $this->update($data);
        }catch (QueryException $exception){
            throw new CreateSessionException("Cannot update Session now");
        }
    }

    public function sessionTerms()
    {
        return $this->model->terms;
    }

    public function deleteSession(int $id)
    {
        return $this->find($id)->delete();
    }

    public function startSession()
    {
        // TODO: Implement startSession() method.
    }

    public function endSession()
    {
        // TODO: Implement endSession() method.
    }
}