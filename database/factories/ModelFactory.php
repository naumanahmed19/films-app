<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->company,
        'username' => $faker->username,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'mobile' => $faker->phoneNumber,
        'fax' => $faker->tollFreePhoneNumber,
        'verified' => true,
        'description' => $faker->text,
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Film::class, function (Faker\Generator $faker) use ($factory) {


    return [

        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'content' => $faker->paragraph,
        'releaseDate' => $faker->date(),
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'ticketPrice' => $faker->numberBetween($min = 10, $max = 100),
        'country' => $faker->country,

    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) use ($factory) {

    $filmId = rand(1, 3);
    return [
        'film_id' => $filmId,
        'name' => $faker->name,
        'comment' => $faker->sentence,

    ];
});


