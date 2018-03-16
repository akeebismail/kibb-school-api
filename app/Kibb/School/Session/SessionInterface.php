<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:24 AM
 */

namespace Kibb\Kibb\School\Session;

use Kibb\Kibb\Base\BaseSchool;

interface SessionInterface extends BaseSchool {
    public function sessions(string $order = 'id', string $sort = 'desc', $except= []);
    public function createSession($data = []);

    public function updateSession(int $id,$data = []);

    public function sessionTerms(int $id);

    public function deleteSession(int $id);

    public function startSession();
    public function endSession();

}