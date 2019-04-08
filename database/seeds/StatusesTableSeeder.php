<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
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
                'name' => 'VIP',
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
            App\Status::create($status);
        }
    }
}
