<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::create([
            'orderId' => 1,
            'productId' => 10,
            'quantity' => 2,
        ]);

        Cart::create([
            'orderId' => 1,
            'productId' => 15,
            'quantity' => 1,
        ]);

        Cart::create([
            'orderId' => 2,
            'productId' => 20,
            'quantity' => 3,
        ]);

        Cart::create([
            'orderId' => 2,
            'productId' => 25,
            'quantity' => 1,
        ]);

        Cart::create([
            'orderId' => 3,
            'productId' => 30,
            'quantity' => 4,
        ]);

        Cart::create([
            'orderId' => 4,
            'productId' => 35,
            'quantity' => 2,
        ]);

        Cart::create([
            'orderId' => 4,
            'productId' => 40,
            'quantity' => 1,
        ]);

        Cart::create([
            'orderId' => 5,
            'productId' => 45,
            'quantity' => 2,
        ]);

        Cart::create([
            'orderId' => 5,
            'productId' => 50,
            'quantity' => 3,
        ]);
    }
}
