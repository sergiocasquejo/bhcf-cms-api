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
            StatusesTableSeeder::class,
            ShoolStatusesTableSeeder::class,
            MinistriesTableSeeder::class,
            LeadershipLevelsTableSeeder::class,
            AuxiliaryGroupsTableSeeder::class,
            MemberCategoriesTableSeeder::class,
            MemberTableSeeder::class,
            SchoolTypeSeeder::class,
            SundayCelebrationStatusSeeder::class,
        ]);
    }
}
