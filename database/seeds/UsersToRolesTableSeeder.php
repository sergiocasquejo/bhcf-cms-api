<?php

use Illuminate\Database\Seeder;

class UsersToRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        $user = App\User::find(1);

        $user->roles()->attach(1);

        $users = App\User::where('id', '<>', 1)->get();
        $roles = App\Role::where('id', '<>', 1)->pluck('id');
        foreach($users as $user) {
            $role = $faker->randomElement($roles);
            $user->roles()->attach($role);
        }
    }
}
