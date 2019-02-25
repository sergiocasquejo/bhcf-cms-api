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
                'label' => 'Administrator',
                'created_by' => 1,
            ],
            [
                'name' => 'senior_pastor',
                'label' => 'Senior Pastor',
                'created_by' => 1,
            ],
            [
                'name' => 'cell_leader',
                'label' => 'Cell Leader',
                'created_by' => 1,
            ],
            [
                'name' => 'finance',
                'label' => 'Finance',
                'created_by' => 1,
            ],


        ];
        foreach($roles as $role) {
            App\Role::create($role);
        }

        
    }
}
