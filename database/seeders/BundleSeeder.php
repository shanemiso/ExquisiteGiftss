<?php

namespace Database\Seeders;

use App\Models\Bundle;
use Illuminate\Database\Seeder;

class BundleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bundle::create([
            'boxSize' => 'Small',
            'card' => 'Happy Birthday!',
        ]);

        Bundle::create([
            'boxSize' => 'Medium',
            'card' => 'Congratulations on your new job!',
        ]);

        Bundle::create([
            'boxSize' => 'Large',
            'card' => 'Best Wishes for Your Wedding!',
        ]);

        Bundle::create([
            'boxSize' => 'Small',
            'card' => 'Get Well Soon!',
        ]);

        Bundle::create([
            'boxSize' => 'Medium',
            'card' => 'Happy Anniversary!',
        ]);
    }
}

