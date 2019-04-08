<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            UsersToRolesTableSeeder::class,
            StatusesTableSeeder::class,
            ClassCategoriesTableSeeder::class,
            MinistriesTableSeeder::class,
            LeadershipLevelsTableSeeder::class,
            AuxiliaryGroupsTableSeeder::class,
            MemberCategoriesTableSeeder::class,
            MemberTableSeeder::class,
        ]);
    }
}
