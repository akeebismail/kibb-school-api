<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/17/18
 * Time: 6:00 AM
 */
namespace Kibb\Exceptions;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Throwable;

class KibbQueryException extends InvalidArgumentException {

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}