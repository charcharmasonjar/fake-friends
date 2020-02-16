<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cast;
use App\CastMember;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(CastMember::class, function (Faker $faker) {
    return [
        'cast_id' => factory('App\Cast')->create()->id,
        'name' => $faker->name,
        'original_image_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/00/The_Child_aka_Baby_Yoda_%28Star_Wars%29.jpg/220px-The_Child_aka_Baby_Yoda_%28Star_Wars%29.jpg',
        'new_image_url' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/00/The_Child_aka_Baby_Yoda_%28Star_Wars%29.jpg/220px-The_Child_aka_Baby_Yoda_%28Star_Wars%29.jpg'
    ];
});
