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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Models\Admin::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
    ];
});

$factory->define(App\Models\Problem::class,function(Faker\Generator $faker){
    return[
        'tid'=> $faker->numberBetween(0,10),
        'content' => $faker->sentences($nbWords = 6, $variableNbWords = true),
        'created_by' => $faker->numberBetween(0,20),
        'created_at' => $faker->dateTimeBetween('-1 month', '+5 days'),
        ];
});

$factory->define(App\Models\Topic::class,function(Faker\Generator $faker){
    return[
        'name' => $faker->sentences($nbWords = 6, $variableNbWords = true),
        'description' => $faker->sentences($nbWords = 6, $variableNbWords = true),
        'created_by' => $faker->numberBetween(0,20),
    ];
});

$factory->define(App\Models\Submission::class,function(Faker\Generator $faker){
    return[
        'uid'=> $faker->numberBetween(0,20),
        'pid'=> $faker->numberBetween(0,20),
        'lang' => $faker->word(),
        'code' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true) ,
    ];
});

