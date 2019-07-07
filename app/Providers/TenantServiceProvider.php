<?php

namespace Kibb\Providers;

use Illuminate\Support\ServiceProvider;
use Kibb\Model\Tenant;
use Kibb\Services\TenantManager;

class TenantServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $manager = new TenantManager();
        $this->app->instance(TenantManager::class, $manager);
        $this->app->bind(Tenant::class, function ()use ($manager){
            return $manager->getTenant();
        });

        $this->app['db']->extend('tenant', function ($config, $name) use ($manager) {
            $tenant = $manager->getTenant();

            if ($tenant) {
                $config['database'] = 'tenant_' . $tenant->id;
            }

            return $this->app['db.factory']->make($config, $name);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
