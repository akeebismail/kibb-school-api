<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 8:44 PM
 */
namespace Kibb\Kibb\School\Level;

use Kibb\Kibb\Base\KibbFormRequest;

class CreateLevelRequest extends KibbFormRequest{
    public function rules(){
        return [
            'name' => ['required']
        ];
    }
}