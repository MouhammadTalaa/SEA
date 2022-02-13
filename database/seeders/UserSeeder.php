<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'specialize' => 'specialize' . $faker->numberBetween(1, 10),
                'university' => 'university' . $faker->numberBetween(1, 10),
                'email' => $faker->unique()->safeEmail
            ]);
        }
    }
}
