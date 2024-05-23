<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'userId' => 1,
            'total' => 200.50,
        ]);

        Order::create([
            'userId' => 2,
            'total' => 150.75,
        ]);

        Order::create([
            'userId' => 3,
            'total' => 300.40,
        ]);

        Order::create([
            'userId' => 4,
            'total' => 100.00,
        ]);

        Order::create([
            'userId' => 5,
            'total' => 250.60,
        ]);

        Order::create([
            'userId' => 6,
            'total' => 400.30,
        ]);

        Order::create([
            'userId' => 7,
            'total' => 500.90,
        ]);

        Order::create([
            'userId' => 8,
            'total' => 750.20,
        ]);

        Order::create([
            'userId' => 9,
            'total' => 600.10,
        ]);

        Order::create([
            'userId' => 10,
            'total' => 50.25,
        ]);
    }
}
