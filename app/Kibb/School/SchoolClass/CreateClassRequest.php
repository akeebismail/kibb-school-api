<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 10:24 AM
 */
namespace Kibb\Kibb\School\SchoolClass;

use Illuminate\Validation\Rule;
use Kibb\Kibb\Base\KibbFormRequest;

class CreateClassRequest extends KibbFormRequest
{
    public function rules(){
        return [
            'name' => ['required','string'],
            'level' => ['required', Rule::exists('levels','id')],
            'class_type' => ['required', Rule::exists('class_types','id')]
        ];
    }
}