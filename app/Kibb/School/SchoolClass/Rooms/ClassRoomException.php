<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/16/18
 * Time: 9:18 AM
 */
namespace Kibb\Kibb\School\SchoolClass\Rooms;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Throwable;

class ClassRoomException extends InvalidArgumentException {

    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}