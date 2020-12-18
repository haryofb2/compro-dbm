<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 78; $i++) {
            $position = $i + 1;
            DB::table('infos')->insert([
                'name' => $faker->name,
                'description' => $faker->text,
                'cabang_id' => $faker->numberBetween($min = 1, $max = 2),
            ]);
        }
    }
}
