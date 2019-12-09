<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        factory(App\Category::class, 5)->create();
        factory(App\Product::class, 20)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
