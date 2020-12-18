<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 63; $i++) {
            $position = $i + 1;
            DB::table('events')->insert([
                'name' => $faker->name,
                'description' => $faker->text,
                'date' => $faker->dateTime,
                'image' => 'somepicture',
            ]);
        }
    }
}
