<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $data = [
                [
                    'name' => 'drilling',
                ],
                [
                    'name' => 'mining',
                ],
                [
                    'name' => 'construction',
                ],
                [
                    'name' => 'shipping',
                ],
            ];
            foreach ($data as $d) {
                DB::table('w_services')->insert([
                    'name'    => $d['name'],
                ]);
            }
        }
    }
}