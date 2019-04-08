<?php

use Illuminate\Database\Seeder;

class ClassCategoriesTableSeeder extends Seeder
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
            ],
        ];
        foreach($statuses as $status) {
            App\ClassCategory::create($status);
        }
    }
}
