<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Generator;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['book', 'service', 'course'];
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('services')->insert([
                'title' => $faker->name(),
                'link' => 'www.' . $faker->name() . '.com',
                'image' => $faker->name() . '.jpg',
                'author' => $faker->name(),
                'specialize' =>'specialize'. $faker->numberBetween(1, 99),
                'type' => $faker->randomelement($types),
            ]);
        }
    }
}
