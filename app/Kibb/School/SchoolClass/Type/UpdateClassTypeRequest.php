<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 10:33 PM
 */
namespace Kibb\Kibb\School\SchoolClass\Type;

use Kibb\Kibb\Base\KibbFormRequest;

class UpdateClassTypeRequest extends KibbFormRequest
{

    public function rules(){
        return [
            'name' => ['required'],
            'level' => ['required']
        ];
    }
}