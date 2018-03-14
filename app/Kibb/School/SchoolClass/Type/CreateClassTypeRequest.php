<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 9:27 PM
 */
namespace Kibb\Kibb\School\SchoolClass\Type;

use Illuminate\Validation\Rule;
use Kibb\Kibb\Base\KibbFormRequest;

class CreateClassTypeRequest extends KibbFormRequest{

    public function rules(){
        return[
            'name' => ['required','string'],
            'level' => ['required',Rule::exists('levels', 'id')]
        ];
    }
}