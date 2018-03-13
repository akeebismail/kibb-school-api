<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:58 AM
 */
namespace Kibb\Kibb\School\Session;

use Kibb\Base\KibbFormRequest;

class CreateSessionRequest extends KibbFormRequest{

    public function rules(){

        return [
          'name' => ['required|string|max:255'],
          'start_day' => ['required|date'],
          'end_day'  => ['required|date'],
        ];
    }
}