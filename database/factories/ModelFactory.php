<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Profile::class, function (Faker\Generator $faker) {
  $uniqueId = false;
  $profileId = null;
  while($uniqueId == false){
    $profileId = bin2hex(random_bytes(10));
    $profile_search = App\Profile::where('profile_id', $profileId )->first();
    $uniqueId = (count($profile_search) > 0) ? false : true;
  }
  $genderArray = ["M", "F"];
    return [
        'profile_id' => $profileId,
        'name' => $faker->name,
        'gender' => $genderArray[array_rand($genderArray, 1)],
        'age' => $faker->numberBetween($min = 20, $max = 100),
        'location' => $faker->city,
    ];
});
