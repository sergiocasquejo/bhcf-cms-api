<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('bhcf17');

        $user =  App\User::create([
            'name' => 'Administrator',
            'username' => 'administrator',
            'email' => 'serg.casquejo@gmail.com',
            'password' => $password
        ]);


        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            $user = App\User::create([
            'name' => $faker->firstName,
            'username' => $faker->userName,
            'email' => $faker->safeEmail,
            'password' => $password
            ]);
        }

        
    }
}
