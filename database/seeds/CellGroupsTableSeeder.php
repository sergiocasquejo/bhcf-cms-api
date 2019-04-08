<?php

use Illuminate\Database\Seeder;

class CellGroupTableSeeder extends Seeder
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
            $member = App\CellGroup::create([
                'member_id' => $faker->numberBetween(1, 109),
                'date_attended' => $faker->dateTimeBetween($startDate = '-2 months', $endDate = 'now', $timezone = null),
                'attended' => $faker->randomElement([1, 0]),
                'created_by' => 1
            ]);
        }
    }
}
