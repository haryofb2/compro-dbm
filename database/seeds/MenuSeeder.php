<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
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
                    'name' => 'info',
                    'category' => '3',
                    'link' => 'backend_info',
                ],
                [
                    'name' => 'event',
                    'category' => '3',
                    'link' => 'backend_event',
                ],
                [
                    'name' => 'employee',
                    'category' => '3',
                    'link' => 'backend_emoloyee',
                ],
                [
                    'name' => 'partner',
                    'category' => '3',
                    'link' => 'backend_partner',
                ],
                [
                    'name' => 'divition',
                    'category' => '1',
                    'link' => 'backend_divition',
                ],
                [
                    'name' => 'position',
                    'category' => '1',
                    'link' => 'backend_position',
                ],
                [
                    'name' => 'cabang',
                    'category' => '1',
                    'link' => 'backend_cabang',
                ],
                [
                    'name' => 'category menu',
                    'category' => '1',
                    'link' => 'backend_catmenu',
                ],
                [
                    'name' => 'menu',
                    'category' => '1',
                    'link' => 'backend_menu',
                ],
                [
                    'name' => 'ore',
                    'category' => '2',
                    'link' => '#',
                ],
                [
                    'name' => 'obb',
                    'category' => '2',
                    'link' => '#',
                ],

            ];
            foreach ($data as $d) {
                DB::table('w_m_menus')->insert([
                    'name'    => $d['name'],
                    'category'    => $d['category'],
                    'link'    => $d['link'],

                ]);
            }
        }
    }
}