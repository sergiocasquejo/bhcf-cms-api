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
        $parent_id = 0;
        $arrIds = [$parent_id];
        $counter = 1;
        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5000; $i++) {
            $member = App\Member::create([
                'parent_id' => $faker->randomElement($arrIds),
                'user_id' => $i == 0 ? 1: 0,
                'invited_by' => null,//$faker->randomElement($arrIds),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'middle_name' => $faker->lastName,
                'nick_name' => $faker->firstName,
                'gender' => 'male',
                'birthdate' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'contact_no' => $faker->phoneNumber,
                'secondary_contact_no' => $faker->phoneNumber,
                'facebook_name' => $faker->userName,
                'avatar' => json_encode([
                        'original' => 'http://lorempixel.com/640/480/cats/',
                        'thumbnail' => 'http://lorempixel.com/450/450/cats/',
                        'small' => 'http://lorempixel.com/100/100/cats/',
                    ]),
                'school_status_id' => $faker->numberBetween(1,3),
                'leadership_level_id' => $faker->numberBetween(1,3),
                'auxiliary_group_id' => $faker->numberBetween(1,3),
                'civil_status' => $faker->randomElement(['Married', 'Widowed', 'Separated', 'Divorced', 'Single']),
                'status' => $faker->randomElement(['Active', 'Inactive']),
                'category_id' => $faker->numberBetween(1,3),
                'remarks' => $faker->paragraph,
                'is_approved' => $faker->numberBetween(0, 1),
                'created_by' => 1
            ]);
            $arrIds[] = $member->id;
            $data = $member->fresh();
            App\Member::find($data->id)->ministries()->attach($faker->randomElement([1, 2, 3, 4]));
            if ($counter >= 12) {
                $parent_id++;
                $arrIds[] = $parent_id;
                $counter = 0;
            }
            $counter++;
        }



    }
}
