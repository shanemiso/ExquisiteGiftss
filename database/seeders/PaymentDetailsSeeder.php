<?php

namespace Database\Seeders;

use App\Models\PaymentDetails;
use Illuminate\Database\Seeder;

class PaymentDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentDetails::create([
            'orderId' => 1,
            'paymentType' => 'Credit Card',
            'status' => 'Paid',
        ]);

        PaymentDetails::create([
            'orderId' => 2,
            'paymentType' => 'Debit Card',
            'status' => 'Failed',
        ]);

        PaymentDetails::create([
            'orderId' => 3,
            'paymentType' => 'PayPal',
            'status' => 'Pending',
        ]);

        PaymentDetails::create([
            'orderId' => 4,
            'paymentType' => 'Cash on Delivery',
            'status' => 'Paid',
        ]);

        PaymentDetails::create([
            'orderId' => 5,
            'paymentType' => 'Credit Card',
            'status' => 'Failed',
        ]);

        PaymentDetails::create([
            'orderId' => 6,
            'paymentType' => 'Debit Card',
            'status' => 'Paid',
        ]);

        PaymentDetails::create([
            'orderId' => 7,
            'paymentType' => 'PayPal',
            'status' => 'Paid',
        ]);

        PaymentDetails::create([
            'orderId' => 8,
            'paymentType' => 'Cash on Delivery',
            'status' => 'Pending',
        ]);

        PaymentDetails::create([
            'orderId' => 9,
            'paymentType' => 'Credit Card',
            'status' => 'Pending',
        ]);

        PaymentDetails::create([
            'orderId' => 10,
            'paymentType' => 'Debit Card',
            'status' => 'Paid',
        ]);
    }
}
