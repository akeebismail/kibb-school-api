<?php

namespace Kibb\Model;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    //

    public function route($name, $parameter = [])
    {
        $host = $this->domain ?? $this->subdomain;
        return 'https://'. $host. app('url')->route($name, $parameter, false);

    }
}
