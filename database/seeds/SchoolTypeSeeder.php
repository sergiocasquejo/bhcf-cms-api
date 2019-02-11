<?php

use Illuminate\Database\Seeder;

class SchoolTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'SUYNIL',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'Life Class',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'SOL 1',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'SOL 2',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'SOL 3',
                'descriptions' => '',
                'created_by' => 1
            ]
        ];
        foreach($types as $type) {
            App\SchoolType::create($type);
        }
    }
}
