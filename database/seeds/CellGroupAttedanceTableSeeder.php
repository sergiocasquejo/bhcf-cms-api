<?php

use Illuminate\Database\Seeder;

class CellGroupAttedanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $arrIds = [1];
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 100; $i++) {
            $member = App\CellGroupAttedance::create([
                'member_id' => $faker->numberBetween(1, 109),
                'attendance_date' => $faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now', $timezone = null),
                'attended' => $faker->randomElement([1, 0]),
                'created_by' => 1
            ]);
        }
    }
}
