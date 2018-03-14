<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 9:38 AM
 */
namespace Kibb\Kibb\School\Term;

use Kibb\Kibb\Base\KibbFormRequest;

class TermCreateRequest extends KibbFormRequest
{
    public function rules(){
        return [
            'name' => ['required','string'],
            'session_id' => ['required'],
            'start_day' => ['required'],
            'end_day' => ['required']
        ];
    }
}