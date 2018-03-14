<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 8:10 AM
 */

namespace Kibb\Kibb\School\Session;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Throwable;

class CreateSessionException extends InvalidArgumentException {
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}