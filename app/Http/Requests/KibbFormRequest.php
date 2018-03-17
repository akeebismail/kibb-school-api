<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:19 AM
 */
namespace Kibb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Kibb\KibbTrait\Restable;

class KibbFormRequest extends FormRequest
{
    use Restable;
    public function authorize(){

        //return Auth::check();
        return true;
    }

    public function forbiddenResponse(){
        return $this->respondForbidden();
    }

    public function response( $errors=[]){
        return $this->respondUnprocessableEntity($errors);
    }
}