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
                'name' => 'SUYNL',
                'label' => 'SUYNL',
                'created_by' => 1
            ],
            [
                'name' => 'Life Class',
                'label' => 'Life Class',
                'created_by' => 1
            ],
            [
                'name' => 'SOL 1',
                'label' => 'SOL 1',
                'created_by' => 1
            ],
            [
                'name' => 'SOL 2',
                'label' => 'SOL 2',
                'created_by' => 1
            ],
            [
                'name' => 'SOL 3',
                'label' => 'SOL 3',
                'created_by' => 1
            ],
        ];
        foreach($statuses as $status) {
            App\ClassCategory::create($status);
        }
    }
}
