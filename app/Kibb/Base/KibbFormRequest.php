<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:19 AM
 */
namespace Kibb\Kibb\Base;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class KibbFormRequest extends FormRequest
{
    public function authorize(){

        //return Auth::check();
        return true;
    }
}