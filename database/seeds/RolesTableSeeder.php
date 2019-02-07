<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
            [
                'name' => 'administrator',
                'descriptions' => 'Super Administrator',
                'created_by' => 1
            ],
            [
                'name' => 'Senior Pastor',
                'descriptions' => 'Senior Pastor',
                'created_by' => 1
            ],
            [
                'name' => 'Primary Leader',
                'descriptions' => 'Primary Leader',
                'created_by' => 1
            ],
            [
                'name' => '144 Cell Leader',
                'descriptions' => '144 Cell Leader',
                'created_by' => 1
            ],
            [
                'name' => 'Regular User',
                'descriptions' => 'Regular User',
                'created_by' => 1
            ]

        ];
        foreach($roles as $role) {
            App\Role::create($role);
        }

        
    }
}
