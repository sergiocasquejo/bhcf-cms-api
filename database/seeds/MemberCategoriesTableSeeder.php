<?php

use Illuminate\Database\Seeder;

class MemberCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // And now, let's create a few articles in our database:
        for ($i = 1; $i < 5; $i++) {
            App\MemberCategory::create([
                'name' => 'Category '. $i,
                'descriptions' => '',
                'created_by' => 1
            ]);   
        }
    }
}
