<?php

use Illuminate\Database\Seeder;

class LeadershipLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            [
                'name' => '144',
                'descriptions' => '',
                'created_by' => 1,
            ],
            [
                'name' => 'Cell Leader',
                'descriptions' => '',
                'created_by' => 1,
            ],
            [
                'name' => '144 Cell Leader',
                'descriptions' => '',
                'created_by' => 1,
            ],
        ];
        foreach($levels as $level) {
            App\LeadershipLevel::create($level);
        }
    }
}
