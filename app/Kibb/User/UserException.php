<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 12:37 PM
 */
namespace Kibb\Kibb\User;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Throwable;

class UserException extends InvalidArgumentException{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}