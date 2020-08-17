<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

use faker\provider\FontAwesomeGeneratorProvider;

use App\UServiceCategory;
use App\UService;
use App\User;
use App\UServiceRequest;

$factory->define(UServiceCategory::class, function (Faker $faker) {
    return [
        'title'     => "Local services in {$faker->countryCode()}",
        'css_color' => $faker->hexcolor(),
    ];
});

$factory->define(UService::class, function (Faker $faker) {
    $faker->addProvider(new FontAwesomeGeneratorProvider($faker));

    return [
        'title'     => "Car Tax per {$faker->year()}",
        'description'     => "Pay yearly tax for your vehicle",
        'fa_icon'   => $faker->fontAwesomeIcon(),
        'is_off'    => false,
        'min_days'  => $faker->numberBetween(1, 3),
        'max_days'  => $faker->numberBetween(3, 5),
        'category_id' => factory(UServiceCategory::class)->create()->id,
    ];
});

$factory->define(UServiceRequest::class, function (Faker $faker) {
    return [
        'user_text' => 'User-defined text',
        'status' => $faker->randomElement([
            UServiceRequest::STATUS_NEW,
            UServiceRequest::STATUS_WORK,
        ]),
        'service_id' => factory(UService::class)->create()->id,
        'user_id' => factory(User::class)->create()->id
    ];
});
