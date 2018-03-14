<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 11:16 AM
 */
namespace Kibb\Kibb\Base;

use Illuminate\Database\Eloquent\Collection;

abstract class KibbTransformer{
    /**
     * Method used to transform a collection of resources
     * @param Collection $items, The resources
     * @return Collection the transformed collection
     */

    public function transformResources(Collection $items) : Collection{
        return $items->map(function ($resource){
            $this->transform($resource);
        });
    }

    /**
     * transform an item of resource
     * @param $resource
     * @return array
     */

    abstract public function transform($resource): array ;
}