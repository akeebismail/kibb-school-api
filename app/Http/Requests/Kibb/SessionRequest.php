<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 1:48 PM
 */
namespace Kibb\Kibb\School\Session;

use Kibb\Http\Requests\KibbFormRequest;

class SessionRequest extends KibbFormRequest{

    public function rules(){

        return [
            'name' => ['required','string','max:255'],
            'start_day' => ['required'],
            'end_day'  => ['required'],
        ];
    }
}