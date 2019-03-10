<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    
    return [
        'user_id' => $faker->numberBetween(1,10),
        'title' => 'サンプルタイトルサンプルタイトル',
        'content' => 'サンプルコンテンツサンプルコンテンツサンプルコンテンツサンプルコンテンツサンプルコンテンツサンプルコンテンツサンプルコンテンツ',
    ];
});
