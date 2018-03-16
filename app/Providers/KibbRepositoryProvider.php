<?php

namespace Kibb\Providers;

use Illuminate\Support\ServiceProvider;
use Kibb\Kibb\School\Level\LevelInterface;
use Kibb\Kibb\School\Level\LevelRepository;
use Kibb\Kibb\School\SchoolClass\ClassInterface;
use Kibb\Kibb\School\SchoolClass\ClassRepository;
use Kibb\Kibb\School\SchoolClass\Rooms\ClassRoomInterface;
use Kibb\Kibb\School\SchoolClass\Rooms\ClassRoomRepository;
use Kibb\Kibb\School\SchoolClass\Type\ClassTypeInterface;
use Kibb\Kibb\School\SchoolClass\Type\ClassTypeRepo;
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
        $this->app->bind(LevelInterface::class,LevelRepository::class);
        $this->app->bind(ClassInterface::class, ClassRepository::class);
        $this->app->bind(ClassTypeInterface::class, ClassTypeRepo::class);
        $this->app->bind(ClassRoomInterface::class,ClassRoomRepository::class);
    }
}
