<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:30 AM
 */
namespace Kibb\Kibb\School\Session;

use Illuminate\Database\Eloquent\Model;
use Kibb\Base\KibbBaseRepository;

class SessionRepo extends KibbBaseRepository implements SessionInterface
{
    protected $model ;
    public function __construct(Sessions $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function createSession($data = [])
    {
    }

    public function updateSession($data = [])
    {
        // TODO: Implement updateSession() method.
    }

    public function sessionTerms()
    {
        // TODO: Implement sessionTerms() method.
    }

    public function deleteSession()
    {
        // TODO: Implement deleteSession() method.
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