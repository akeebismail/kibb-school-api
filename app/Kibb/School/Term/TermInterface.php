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
    public function terms(string $order = 'id', string $sort = 'desc');
    public function createTerms($data = []);

    public function updateTerm(int $id,$data = []);

    public function deleteTerm(int $id);

    public function termSession(int $id);

    public function currentSessionTerm();

    public function currentTerm();
}