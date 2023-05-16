<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
        User::create([
            'username' => 'Admin',
            'firstname' => 'admin',
            'lastname' => 'admin',
            'company' => 'administrator',
            'contact' => '1234567890',
            'region' => 'NATIONAL CAPITAL REGION (NCR)',
            'usertype' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Replace 'admin123' with the desired password
        ]);



    }
}
