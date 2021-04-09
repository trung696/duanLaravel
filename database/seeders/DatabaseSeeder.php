<?php

namespace Database\Seeders;


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
         \App\Models\User::factory(7)->create();
//        \App\Models\Role::factory(4)->create();
//         \App\Models\Category::factory(1)->create();
//         \App\Models\Product::factory(22)->create();
    }
}
