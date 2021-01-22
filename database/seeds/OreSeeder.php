<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            // $position = $i + 1;
            DB::table('ore')->insert([
                'date' => $faker->unique()->dateTimeBetween($startDate = "now", $endDate = "30 days")->format('Y-m-d'),
                'actual' => $faker->numberBetween($min = 1000, $max = 5000),
                'plan' => $faker->numberBetween($min = 1000, $max = 5000),
            ]);
        }
    }
}