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
        // TODO
        $this->call([
            PostsTableSeeder::class,
            CategoriesTableSeeder::class,
            TagsTableSeeder::class,
        ]);
    }
}
