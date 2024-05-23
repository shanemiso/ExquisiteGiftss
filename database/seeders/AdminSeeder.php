<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'email' => 'admin1@example.com',
            'firstName' => 'John',
            'LastName' => 'Doe',
            'companyName' => 'Example Inc.',
            'lastLoggedIn' => now(),
            'password' => Hash::make('password1'),
        ]);

        Admin::create([
            'email' => 'admin2@example.com',
            'firstName' => 'Jane',
            'LastName' => 'Smith',
            'companyName' => 'Acme Corp.',
            'lastLoggedIn' => now(),
            'password' => Hash::make('password2'),
        ]);

        Admin::create([
            'email' => 'admin3@example.com',
            'firstName' => 'Alice',
            'LastName' => 'Johnson',
            'companyName' => 'Widgets LLC',
            'lastLoggedIn' => now(),
            'password' => Hash::make('password3'),
        ]);

        Admin::create([
            'email' => 'admin4@example.com',
            'firstName' => 'Bob',
            'LastName' => 'Brown',
            'companyName' => 'Tech Solutions',
            'lastLoggedIn' => now(),
            'password' => Hash::make('password4'),
        ]);

        Admin::create([
            'email' => 'admin5@example.com',
            'firstName' => 'Charlie',
            'LastName' => 'Davis',
            'companyName' => 'Innovate Ltd.',
            'lastLoggedIn' => now(),
            'password' => Hash::make('password5'),
        ]);
    }
}
