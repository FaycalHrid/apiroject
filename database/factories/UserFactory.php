<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 19/02/2019
 * Time: 11:19
 */

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});