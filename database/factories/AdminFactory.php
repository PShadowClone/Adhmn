<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\Core\Admin\Models\Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123456'),
        'is_active' => $faker->randomElement(['0', '1']),
        'country_id' => $faker->randomElement(getCountry())
    ];
});

/**
 * get country_id option
 * it may have null or real country id
 *
 * @return array
 * @author Amr
 */
function getCountry()
{
    return [
        \Core\Country\Models\Country::all()->shuffle()->first()->id,
        null
    ];
}
