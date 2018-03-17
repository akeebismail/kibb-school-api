<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 10:33 PM
 */
namespace Kibb\Http\Requests\Kibb;


use Kibb\Http\Requests\KibbFormRequest;

class ClassTypeRequest extends KibbFormRequest
{

    public function rules(){
        return [
            'name' => ['required'],
            'level' => ['required']
        ];
    }
}