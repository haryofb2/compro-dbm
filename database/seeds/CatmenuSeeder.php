<?php

use Illuminate\Database\Seeder;

class CatmenuSeeder extends Seeder
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
                        'name' => 'master',
                    ],
                    [
                        'name' => 'transaksi',
                    ],
                    [
                        'name' => 'menu',
                    ],

                ];
                foreach ($data as $d) {
                    DB::table('w_m_category_menus')->insert([
                        'name'    => $d['name'],
                    ]);
                }
            }
        }    }
}