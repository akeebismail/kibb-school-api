<?php

use Illuminate\Database\Seeder;
use Kibb\User;
use Kibb\Kibb\School\Term\Terms;
use Kibb\Kibb\School\Level\Levels;
use Kibb\Kibb\School\SchoolClass\Type\ClassType;
use Kibb\Kibb\School\SchoolClass\Classes;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 5)->create();
        factory(Terms::class, 3)->create();
        factory(Levels::class, 4)->create();
        factory(ClassType::class, 5)->create();
        factory(Classes::class, 6)->create();
    }
}
