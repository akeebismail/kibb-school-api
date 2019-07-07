<?php

namespace Kibb\Http\Middleware;

use Closure;
use Kibb\Services\TenantManager;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IdentifyTenant
{

    protected $tenantManager;

    public function __construct(TenantManager $manager)
    {

        $this->tenantManager = $manager;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $host = $request->getHost();
        $pos = strpos($host, env('TENANT_DOMAIN'));
        if ($this->tenantManager->loadTenant($pos !== false? substr($host, 0,$pos -1): $host, $pos !== false)) {

            return $next($request);
        }

        throw new NotFoundHttpException();
    }
}
