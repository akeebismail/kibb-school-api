<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 07/07/2019
 * Time: 2:07 PM
 */

namespace Kibb\Services;


use Kibb\Model\School;
use Kibb\Model\Tenant;

class TenantManager
{
    /*
     *
     */
    private $tenant ;


    /**
     * @param School|null $school
     */
    public function setTenant(?Tenant $tenant)
    {
        $this->tenant = $tenant;
    }

    public function getTenant(): ?Tenant
    {
        return $this->tenant;
    }

    public function loadTenant($identifier, bool $subdomain) : bool
    {
        $tenant = Tenant::query()->where($subdomain ? 'subdomain': 'domain', $identifier)->first();
        if ($tenant){
            $this->setTenant($tenant);
            return true;
        }
        return false;
    }
}