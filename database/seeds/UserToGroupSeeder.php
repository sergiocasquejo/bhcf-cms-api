<?php

use Illuminate\Database\Seeder;

class UserToGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::find(1);
        $user->roles()->attach(1);
    }
}
