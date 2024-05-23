<?php

namespace Database\Seeders;

use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            UserAddress::create([
                'userId' => $i,
                'district' => $this->faker->state,
                'city' => $this->faker->city,
                'street' => $this->faker->streetAddress,
            ]);
        }
    }
}
