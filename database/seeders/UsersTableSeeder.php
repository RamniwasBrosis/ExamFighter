<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'brosis',
            'phone_number' => '1234567890',
            'email' => 'brosis@gmail.com',
            'password' => '12345', 
            'membership_type' => 'Free',
            'otp' => null,
            'wallet_amount' => 0.00,
            'referral_code' => null,
            'status' => 'Active',
            'uu_id' => '2',
        ]);

    }
}
