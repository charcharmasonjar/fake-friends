<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class,10)->create();
        factory(App\Cast::class,12)->create();
        factory(App\CastMember::class,5)->create();
    }
}
