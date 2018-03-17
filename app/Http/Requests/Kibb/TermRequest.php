<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 3:38 PM
 */
namespace Kibb\Kibb\School\Term;

use Illuminate\Validation\Rule;
use Kibb\Http\Requests\KibbFormRequest;

class TermRequest extends KibbFormRequest{

    public function rules(){

        return [
            'name' => ['required','string'],
            'session_id' => ['required', Rule::exists('terms','id')],
            'start_day' => ['required'],
            'end_day' => ['required']
        ];
    }
}