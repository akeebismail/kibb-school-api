<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 9:25 AM
 */
namespace Kibb\Kibb\School\Term;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Throwable;

class TermException extends InvalidArgumentException{

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}