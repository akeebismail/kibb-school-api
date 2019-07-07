<?php

namespace Kibb\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Kibb\Model\Tenant;
use Kibb\Services\TenantManager;

class TenantDatabase implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $tenant;

    protected $tenantManager ;

    /**
     * Create a new job instance.
     *
     * @param Tenant $tenant
     * @param TenantManager $tenantManager
     */
    public function __construct(Tenant $tenant, TenantManager $tenantManager)
    {
        $this->tenant = $tenant;
        $this->tenantManager = $tenantManager;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $database = 'tenant_'. $this->tenant->id;
        $connection = DB::connection('tenant');
       // $createMysql = $connection->statement('CREATE DATABASE ' . $database);
        $createMysql=  $connection->getPdo()->exec("CREATE DATABASE IF NOT EXISTS `{$database}`");
        if ($createMysql) {
            $this->tenantManager->setTenant($this->tenant);
            $connection->reconnect();
            $this->migrate();
        }
    }

    public function migrate()
    {
        $migrator = app('migrator');
        $migrator->setConnection('tenant');

        if ($migrator->repositoryExists()){
            $migrator->getRepository()->createRepository();
        }

        $migrator->run(database_path('migrations/tenants'),[]);
    }
}
