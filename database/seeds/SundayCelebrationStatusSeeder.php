<?php

use Illuminate\Database\Seeder;

class SundayCelebrationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'name' => '1st Timer',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => '2nd Timer',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => '3rd Timer',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => '4th Timer',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'Regular',
                'descriptions' => '',
                'created_by' => 1
            ]
        ];
        foreach($statuses as $status) {
            App\SundayCelebrationStatus::create($status);
        }
    }
}
