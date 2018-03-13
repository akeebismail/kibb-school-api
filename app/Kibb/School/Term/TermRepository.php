<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:51 AM
 */
namespace Kibb\Kibb\School\Term;
use Illuminate\Database\Eloquent\Model;
use Kibb\Base\KibbBaseRepository;
use Kibb\Kibb\School\Session\Term\TermInterface;

class TermRepository extends KibbBaseRepository implements TermInterface
{
    protected $model;
    public function __construct(Terms $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
}