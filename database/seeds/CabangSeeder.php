<?php

use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            {
                $data = [
                    [
                        'name' => 'site',
                    ],
                    [
                        'name' => 'ho',
                    ],
                ];
                foreach ($data as $d) {
                    DB::table('cabangs')->insert([
                        'name'    => $d['name'],
                    ]);
                }
            }
        }    }
}