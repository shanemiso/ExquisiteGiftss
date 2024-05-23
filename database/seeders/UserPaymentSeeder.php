<?php

namespace Database\Seeders;

use App\Models\UserPayment;
use Illuminate\Database\Seeder;

class UserPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            UserPayment::create([
                'userId' => $i,
                'paymentType' => $this->faker->randomElement(['Credit Card', 'Debit Card', 'PayPal']),
                'accountNumber' => $this->faker->creditCardNumber,
            ]);
        }
    }
}
