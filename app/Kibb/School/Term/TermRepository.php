<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:51 AM
 */
namespace Kibb\Kibb\School\Term;
use function GuzzleHttp\Psr7\str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
    public function terms(string $order='id',string $sort = 'desc', $except=[]){
        return $this->model->orderBy($order, $sort)->get()->except($except);
    }
    public function createTerms($data = [])
    {
        try{
            return $this->create($data);
        }catch (QueryException $exception){
            return $this->exception($exception);
        }
    }

    public function updateTerm(int $id,$data = [])
    {
        try{
            $term = $this->model->find($id);
            $term->session_id = $data['session_id'];
            $term->name = $data['name'];
            $term->slug = str_slug($data['name'], '-');
            $term->start_day = $data['start_day'];
            $term->end_day = $data['end_day'];
            $term->notification = $data['notification'];
            $term->update();
            return $term;

        }catch (ModelNotFoundException $exception){
            return $exception;
        }catch (QueryException $exception){
          return $this->exception($exception);
        }
    }

    private function exception($exception){
        throw new TermException($exception->getMessage(),$exception->getCode());

    }
    public function deleteTerm(int $id)
    {
        return $this->model->find($id)->delete();
    }

    public function termSession(int $id)
    {
        return $this->model->find($id)->session;
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