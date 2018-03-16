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
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Kibb\Kibb\Base\KibbBaseRepository;

class SessionRepo extends KibbBaseRepository implements SessionInterface
{

    protected $model ;
    public function __construct(Session $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
    public function sessions(string $order='id',string $sort = 'desc', $except =[]){

        return $this->model->orderby($order, $sort)->get()->except($except);
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
    public function updateSession(int $id,$data = [])
    {
        try{
            $session = $this->model->find($id);
            $session->name = $data['name'];
            $session->slug = str_slug($data['name'],'-');
            $session->start_day = $data['start_day'];
            $session->end_day = $data['end_day'];
            $session->notification = $data['notification'];
            $session->update();
            return $session;
        }catch (QueryException $exception){
            throw new CreateSessionException("Cannot update Session now");
        }catch (ModelNotFoundException $exception){
            throw new SesseionNotFoundException(
                $exception->getMessage().' '.$exception->getModel()
            );
        }
    }

    public function sessionTerms( int $id)
    {
        return $this->model->find($id)->terms;
    }

    public function deleteSession(int $id)
    {
        return $this->find($id)->delete();
    }

    public function startSession()
    {
        // TODO: Implement startSession() method.
    }
a
    public function endSession()
    {
        // TODO: Implement endSession() method.
    }
}