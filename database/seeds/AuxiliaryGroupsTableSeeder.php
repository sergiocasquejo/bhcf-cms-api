<?php

use Illuminate\Database\Seeder;

class AuxiliaryGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [
            [
                'name' => 'Blessed Couple',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'Blessed Youth',
                'descriptions' => '',
                'created_by' => 1
            ],
            [
                'name' => 'Blessed Pro',
                'descriptions' => '',
                'created_by' => 1
            ]
        ];

        foreach ($arr as $item) {
            App\AuxiliaryGroup::create($item);
        }
    }
}
