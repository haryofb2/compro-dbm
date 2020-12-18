<?php

use Illuminate\Database\Seeder;

class DivitionSeeder extends Seeder
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
                    'name' => 'DBM',
                ],
                [
                    'name' => 'Human Resouce & General Affair',
                ],
                [
                    'name' => 'Plant & Business Development',
                ],
                [
                    'name' => 'Healthy, Safety, Environment',
                ],
                [
                    'name' => 'Information & Technology',
                ],
                [
                    'name' => 'Operational & Mine Engineering',
                ],
                [
                    'name' => 'Finance & Accounting',
                ],

            ];
            foreach ($data as $d) {
                DB::table('divitions')->insert([
                    'name'    => $d['name'],
                ]);
            }
        }
    }
}
