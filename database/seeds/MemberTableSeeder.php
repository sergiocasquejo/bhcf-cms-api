<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 100; $i++) {
            $member = App\Member::create([
                'leader_id' => 1,
                'user_id' => 0,
                'invited_by' => 1,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->lastName,
                'gender' => 'male',
                'birthdate' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'contact_no' => $faker->phoneNumber,
                'secondary_contact_no' => $faker->phoneNumber,
                'facebook_name' => $faker->userName,
                'avatar' => 'http://lorempixel.com/640/480/cats/',
                'school_status_id' => $faker->numberBetween(1,3),
                'leadership_level_id' => $faker->numberBetween(1,3),
                'auxiliary_group_id' => $faker->numberBetween(1,3),
                'status_id' => $faker->numberBetween(1,3),
                'category_id' => $faker->numberBetween(1,3),
                'remarks' => $faker->paragraph,
                'created_by' => 1
            ]);
            $data = $member->fresh();
            App\Member::find($data->id)->ministries()->attach($faker->randomElement([1, 2, 3, 4]));
        }



    }
}
