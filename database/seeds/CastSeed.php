<?php

use Illuminate\Database\Seeder;

class CastSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cast::class, 10)->create();
    }
}
