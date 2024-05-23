<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            Product::create([
                'productName' => 'Product ' . $i,
                'image' => 'https://via.placeholder.com/400x300',
                'description' => $this->faker->paragraph,
                'categoryId' => rand(1, 10),
                'price' => rand(10, 1000),
                'vendorId' => rand(1, 10),
                'quantity' => rand(0, 100),
                'discountPrice' => rand(5, 500),
            ]);
        }
    }
}
