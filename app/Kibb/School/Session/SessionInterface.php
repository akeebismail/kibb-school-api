<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:24 AM
 */

namespace Kibb\Kibb\School\Session;

use Kibb\Base\BaseSchool;

interface SessionInterface extends BaseSchool {

    public function createSession($data = []);

    public function updateSession($data = []);

    public function sessionTerms();

    public function deleteSession();

    public function startSession();
    public function endSession();

}