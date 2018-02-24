<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 2/24/18
 * Time: 9:22 PM
 */

namespace Kibb\KibbTrait;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
/**
 * Class QueryFilters
 * @package KibbTrait
 */

abstract class QueryFilters
{
    /**
     * the given request
     * @var Request
     */
    protected $request;

    /**
     * the given Builder
     * @var Builder
     */
    protected $builder;

    /**
     * QueryFilters Constructor
     * @param Request $request
     */

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder){
        $this->builder = $builder;

        foreach ($this->filters() as $name => $value){
            $name = camel_case($name);
            if (!method_exists($this,$name)){
                continue;
            }
            if (trim($value)){
                $this->$name($value);
            }else{
                $this->$name();
            }
        }

        return $this->builder;
    }


    /**
     * Get all filters
     *
     * @return array
     */

    public function filters(){

        return $this->request->all();
    }
}