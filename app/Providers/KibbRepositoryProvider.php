<?php

namespace Kibb\Providers;

use Illuminate\Support\ServiceProvider;
use Kibb\Kibb\School\Session\SessionInterface;
use Kibb\Kibb\School\Session\SessionRepo;
use Kibb\Kibb\School\Term\TermInterface;
use Kibb\Kibb\School\Term\TermRepository;

class KibbRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(SessionInterface::class,SessionRepo::class);
        $this->app->bind(TermInterface::class, TermRepository::class);
    }
}
