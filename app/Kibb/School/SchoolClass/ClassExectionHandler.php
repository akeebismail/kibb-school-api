<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 11:01 AM
 */
namespace Kibb\Kibb\School\SchoolClass;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Throwable;

class ClassExectionHandler extends InvalidArgumentException
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}