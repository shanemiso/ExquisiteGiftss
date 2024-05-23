<?php

namespace Database\Seeders;

use App\Models\BundleProduct;
use Illuminate\Database\Seeder;

class BundleProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BundleProduct::create([
            'bundleId' => 1,
            'productId' => 10,
        ]);

        BundleProduct::create([
            'bundleId' => 1,
            'productId' => 15,
        ]);

        BundleProduct::create([
            'bundleId' => 2,
            'productId' => 20,
        ]);

        BundleProduct::create([
            'bundleId' => 2,
            'productId' => 25,
        ]);

        BundleProduct::create([
            'bundleId' => 3,
            'productId' => 30,
        ]);

        BundleProduct::create([
            'bundleId' => 4,
            'productId' => 35,
        ]);

        BundleProduct::create([
            'bundleId' => 4,
            'productId' => 40,
        ]);

        BundleProduct::create([
            'bundleId' => 5,
            'productId' => 45,
        ]);

        BundleProduct::create([
            'bundleId' => 5,
            'productId' => 50,
        ]);
    }
}
