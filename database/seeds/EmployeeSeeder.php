<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
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
                    'name' => 'Deni Sri Wardana',
                    'divition_id' => '1',
                    'position_id' => '1',
                    'cabang_id' => '2',
                    'image' => 'Stakeholder',
                    'quote' => 'Selamat datang di website kami, harapan kami agar website ini dapat memberikan informasi relevan kepada Anda, disertai pengertian yang memadai mengenai PT. Djava Berkah Mineral.'

                ],
                [
                    'name' => 'Agung Sudarsono',
                    'divition_id' => '2',
                    'position_id' => '2',
                    'cabang_id' => '2',
                    'image' => 'Stakeholder',
                    'quote' => 'Terima kasih telah mengakses website kami, kami berharap website ini dapat memberikan kesempatan kepada user untuk melihat profil perusahaan kami.'
                ],
                [
                    'name' => 'Nurcholis',
                    'divition_id' => '3',
                    'position_id' => '2',
                    'cabang_id' => '2',
                    'image' => 'Stakeholder',
                    'quote' => 'Selamat datang di website kami, semoga website kami dapat memberikan informasi tentang perusahaan dan kegiatan yang kami lakukan untuk perusahaan ini.'
                ],
                [
                    'name' => 'Dadan Darmawan',
                    'divition_id' => '4',
                    'position_id' => '2',
                    'cabang_id' => '2',
                    'image' => 'Stakeholder',
                    'quote' => 'Terima kasih telah mengunjungin website kami karena kami berharap informasi yang kami bagikan adalah yang Anda harapkan ada di website kami.'
                ],
                [
                    'name' => 'Haryo Febrima Yudha',
                    'divition_id' => '5',
                    'position_id' => '2',
                    'cabang_id' => '2',
                    'image' => 'Stakeholder',
                    'quote' => 'Terima kasih telah mengunjungi website kami, kami berharap website kami menjadi penghubung kami dengan user kami. Sehingga user mendapatkan informasi perusahaan melalui website ini.'
                ],
                [
                    'name' => 'Rakhmat Budi W',
                    'divition_id' => '6',
                    'position_id' => '2',
                    'cabang_id' => '2',
                    'image' => 'Stakeholder',
                    'quote' => 'Terima kasih telah mengunjungi website PT. Djava Berkah Mineral kiranya website ini bisa menjadi referensi bagi Anda yang ingin mendapatkan informasi tentang perusahaan kami.'
                ],
                [
                    'name' => 'Rheiny P Dewi',
                    'divition_id' => '7',
                    'position_id' => '2',
                    'cabang_id' => '2',
                    'image' => 'Stakeholder',
                    'quote' => 'Selamat datang di website kami, melalui website ini kami bisa berbagi mengenai profil perusahaan ini.',
                ],

            ];
            foreach ($data as $d) {
                DB::table('employees')->insert([
                    'name'    => $d['name'],
                    'divition_id'    => $d['divition_id'],
                    'position_id'    => $d['position_id'],
                    'cabang_id'    => $d['cabang_id'],
                    'image'    => $d['image'],
                    'quote'    => $d['quote'],

                ]);
            }
        }
    }
}
