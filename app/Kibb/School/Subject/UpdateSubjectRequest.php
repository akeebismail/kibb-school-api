<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 11:39 AM
 */
namespace Kibb\Kibb\School\Subject;

use Illuminate\Validation\Rule;
use Kibb\Kibb\Base\KibbFormRequest;

class UpdateSubjectRequest extends KibbFormRequest{

    public function rules(){

        return [
            'name' => ['required',Rule::unique('subjects')],
            'level_id' => [Rule::unique('levels','id')]
        ];
    }
}