<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 9:45 AM
 */
namespace Kibb\Http\Requests\Kibb;

use Illuminate\Validation\Rule;
use Kibb\Http\Requests\KibbFormRequest;

class ClassRoomRequest extends KibbFormRequest{

    public function rules(){

        return [
            'name' => ['required'],
            'class_id' => ['required',Rule::exists('classes','id')],
            'code' => ['required',Rule::unique('class_rooms')]
        ];
    }
}