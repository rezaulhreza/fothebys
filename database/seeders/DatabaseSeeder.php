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
        // \App\Models\User::factory(10)->create();
        // \App\Models\Category::factory(5)->create();
        \App\Models\LotItem::factory(15)->create();
        \App\Models\Faq::factory(5)->create();
    }
}
