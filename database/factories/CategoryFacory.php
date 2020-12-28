<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
//make variable to create same name slug

$factory->define(Category::class, function (Faker $faker) {

   $category = $faker->unique()->name;
   $slug = str_slug($name, '-');

    return [
        'name' =>$category,
        'slug'=>str_slug($category),
        'status' => $faker->randomElement($array = array('active','inactive')),

    ];
});
