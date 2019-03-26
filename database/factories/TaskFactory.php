<?php
/**
 * Created by PhpStorm.
 * User: Faycal
 * Date: 19/02/2019
 * Time: 11:19
 */
use Faker\Generator as Faker;
$factory->define(App\Task::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->text,
        'user_id' => $faker->randomElement($users)
    ];
});