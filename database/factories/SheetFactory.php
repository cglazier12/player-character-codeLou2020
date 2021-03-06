<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sheet;
use Faker\Generator as Faker;

$factory->define(Sheet::class, function (Faker $faker) {
    return [
        'player_name' => $faker->name,
        'character_name' => $faker->name,
        'level' => $faker->numberBetween(0,3),
        'exp' => rand(0000, 9999),
        'class' => $faker->company,
        'race' => $faker->dayOfWeek,
        'alignment' => $faker->city,
        'strength' => rand(00,20),
        'dexterity' => rand(00,20),
        'constitution' => rand(00,20),
        'intelligence' => rand(00,20),
        'wisdom' => rand(00,20),
        'charisma' => rand(00,20),
        'proficiency_bonus' => 2,
        'acrobatics' => $faker->boolean,
        'animal_handling' => $faker->boolean,
        'arcana' => $faker->boolean,
        'athletics' => $faker->boolean,
        'deception' => $faker->boolean,
        'history' => $faker->boolean,
        'insight' => $faker->boolean,
        'intimidation' => $faker->boolean,
        'investigation' => $faker->boolean,
        'medicine' => $faker->boolean,
        'nature' => $faker->boolean,
        'perception' => $faker->boolean,
        'performance' => $faker->boolean,
        'persuasion' => $faker->boolean,
        'religion' => $faker->boolean,
        'sleight_of_hand' => $faker->boolean,
        'stealth' => $faker->boolean,
        'survival' => $faker->boolean,
        'prof_acrobatics' => 0,
        'prof_animal_handling' => 0,
        'prof_arcana' => 0,
        'prof_athletics' => 0,
        'prof_deception' => 0,
        'prof_history' => 0,
        'prof_insight' => 0,
        'prof_intimidation' => 0,
        'prof_investigation' => 0,
        'prof_medicine' => 0,
        'prof_nature' => 0,
        'prof_perception' => 0,
        'prof_performance' => 0,
        'prof_persuasion' => 0,
        'prof_religion' => 0,
        'prof_sleight_of_hand' => 0,
        'prof_stealth' => 0,
        'prof_survival' => 0,
        'armor_class' => 12,
        'initiative' => 10,
        'speed' => 30,
        'hp_max' => 50,
        'hp_current' => 25,
        'hp_temp' => 5,
        'hit_dice' => 10,
        'hit_dice_temp'=> 3,
        'personality' => $faker->sentence,
        'ideals' => $faker->sentence,
        'bonds' => $faker->sentence,
        'flaws' => $faker->sentence,
        'credits' => 1000,
    ];
});
