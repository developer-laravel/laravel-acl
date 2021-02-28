<?php
//use App\User;

/*
|--------------------------------------------------------------------------
| Product Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {

    return [
        'user_id' => User::all()->random()->user_id,
        'name' => $faker->name,
        'price' => $faker->randomFloat(2, 0, 8),
        'description' => $faker->text,
        //'image_url' => $faker->image('images',400,300),
        //'image_url' => $faker->image('images',400,300),
        // 'image_url' =>  'https://placeimg.com/100/100/any?' . rand(1, 100),
        'image_url' =>  'https://via.placeholder.com/150?' . rand(1, 100),
        'status' => $faker->randomElement(['Y','N']),
    ];
});
