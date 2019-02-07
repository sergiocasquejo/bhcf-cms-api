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

        App\User::create([
            'name' => 'Administrator',
            'username' => 'administrator',
            'email' => 'serg.casquejo@gmail.com',
            'password' => $password,
            'role_id' => 1
        ]);
    }
}
