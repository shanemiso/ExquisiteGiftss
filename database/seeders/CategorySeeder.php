<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Electronics']);
        Category::create(['name' => 'Books']);
        Category::create(['name' => 'Clothing']);
        Category::create(['name' => 'Home & Kitchen']);
        Category::create(['name' => 'Beauty']);
        Category::create(['name' => 'Sports']);
        Category::create(['name' => 'Toys']);
        Category::create(['name' => 'Automotive']);
        Category::create(['name' => 'Garden']);
        Category::create(['name' => 'Health']);
    }
}
