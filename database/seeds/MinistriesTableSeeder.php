<?php

use Illuminate\Database\Seeder;

class MinistriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ministries = [
            [
                'name' => 'Praise and Worship',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'Technical',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'Ashier',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'Kids',
                'descriptions' => '',
                'created_by' => 1
            ]

        ];

        foreach($ministries as $ministry) {
            App\Ministry::create($ministry);
        }
    }
}
