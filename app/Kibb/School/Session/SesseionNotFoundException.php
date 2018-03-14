<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 8:12 AM
 */
namespace Kibb\Kibb\School\Session;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SesseionNotFoundException extends NotFoundHttpException{
    public function __construct(string $message = null, \Exception $previous = null, int $code = 0)
    {
        parent::__construct($message, $previous, $code);
    }
}