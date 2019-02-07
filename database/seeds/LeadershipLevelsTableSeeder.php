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

        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
            App\LeadershipLevel::create([
                'name' => $faker->text(120),
                'descriptions' => $faker->text(120),
                'created_by' => 1
            ]);
        }
    }
}
