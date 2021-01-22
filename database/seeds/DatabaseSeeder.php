<?php

use App\Planfuel;
use App\Planobb;
use App\Planore;
use App\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
            DivitionSeeder::class,
            PositionSeeder::class,
            CabangSeeder::class,
            EmployeeSeeder::class,
            InfoSeeder::class,
            EventSeeder::class,
            ServiceSeeder::class,
            CatmenuSeeder::class,
            MenuSeeder::class,
            FuelSeeder::class,
            ObbSeeder::class,
            OreSeeder::class,

            ]
        );
    }
}