<?php

use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
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
                    'name' => 'Direktur',
                ],
                [
                    'name' => 'Manager',
                ],
                [
                    'name' => 'supervisor',
                ],
                [
                    'name' => 'staff',
                ],

            ];
            foreach ($data as $d) {
                DB::table('positions')->insert([
                    'name'    => $d['name'],
                ]);
            }
        }
    }
}