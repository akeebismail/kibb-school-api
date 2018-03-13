<?php

use Illuminate\Database\Seeder;
use Kibb\User;
use Kibb\Kibb\School\Term\Terms;
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
        factory(Terms::class,3)->create();
    }
}
