<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 8:50 PM
 */
namespace Kibb\Kibb\School\Level;

use Kibb\Http\Requests\KibbFormRequest;

class LevelRequest extends KibbFormRequest
{
    public function rules(){
        return [
            'name' => ['required']
        ];
    }
}