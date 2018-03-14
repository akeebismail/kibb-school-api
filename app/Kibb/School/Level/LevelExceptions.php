<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/14/18
 * Time: 7:48 PM
 */
namespace Kibb\Kibb\School\Level;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Throwable;

class LevelExceptions extends InvalidArgumentException{

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}