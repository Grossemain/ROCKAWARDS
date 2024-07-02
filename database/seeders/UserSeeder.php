<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'user1',
                'surname' => 'user1',
                'email' => 'user@example.com',
                'street_name' => 'user1 street',
                'zip_code' => '44000',
                'city' => 'Nantes',
                'password' => Hash::make('azertyuiop'),
                'email_verified_at' => now(),
                'role_id' => '1',
            ],
            [
                'name' => 'user2',
                'surname' => 'user2',
                'email' => 'user2@example.com',
                'street_name' => 'user2 street',
                'zip_code' => '44100',
                'city' => 'Nantes',
                'password' => '$2y$13$/2TfiAfLSfygaE2lIQGYVeHHCrp2yy49yQRLy6AXSNzj6QqURy7E6',
                'email_verified_at' => now(),
                'role_id' => '1',
            ],
            [
                'name' => 'admin',
                'surname' => 'administrateur',
                'email' => 'admin@example.com',
                'street_name' => 'admin street',
                'zip_code' => '44000',
                'city' => 'Nantes',
                'password' => '$2y$13$/2TfiAfLSfygaE2lIQGYVeHHCrp2yy49yQRLy6AXSNzj6QqURy7E6',
                'email_verified_at' => now(),
                'role_id' => '2',
            ],

        ]);
    }
}
