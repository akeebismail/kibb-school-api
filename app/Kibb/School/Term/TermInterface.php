<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 3/13/18
 * Time: 12:51 AM
 */

namespace Kibb\Kibb\School\Term;

use Kibb\Kibb\Base\BaseSchool;

interface TermInterface extends BaseSchool{
    public function createTerms($data = []);

    public function updateSession($data = []);

    public function deleteTerms(int $id);

    public function termSessions();

    public function currentSessionTerm();

    public function currentTerm();
}