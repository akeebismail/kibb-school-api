<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 11:05 AM
 */
namespace Kibb\Kibb\School\Subject;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Throwable;

class SubjectException extends InvalidArgumentException {

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}