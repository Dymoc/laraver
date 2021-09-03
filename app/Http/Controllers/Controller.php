<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//    public $date =[];


    protected function getNews(): array
    {
        $faker = Factory::create($locale = 'ru-RU');
        $date =[];
        if (empty($date)) {
            $countNumber = mt_rand(5, 15);
            for ($i = 0; $i < $countNumber; $i++) {
                array_push($date,[
                    'id' => $i + 1,
                    'category' => $faker->creditCardType(),
                    'title' => $faker->title(),
                    'description' => $faker->sentence(6),
                    'author' => $faker->name(),
                    'created_at' => now()
                ]);
            }
        }
//        dump($date);
        return $date;
    }
}
