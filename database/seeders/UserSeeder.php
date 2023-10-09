<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'usertype' => '1',
            'password' => Hash::make('admin@admin'),
            'profile_photo_path' => '',
        ]);

        User::create([
            'name' => 'Sangam',
            'email' => 'katwalsangam@gmail.com',
            'usertype' => '0',
            'phone' => '9864998311',
            'address' => 'Gothatar',
            'password' => Hash::make('sangam123'),
            'profile_photo_path' => '',
        ]);

        User::create([
            'name' => 'Anil',
            'email' => 'anilkafle22@gmail.com',
            'usertype' => '0',
            'phone' => '9868832985',
            'address' => 'Tikathali',
            'password' => Hash::make('anil123'),
            'profile_photo_path' => '',
        ]);

        User::create([
            'name' => 'Shikshita',
            'email' => 'shikshitasubedi1@gmail.com',
            'usertype' => '0',
            'phone' => '9840217070',
            'address' => 'Koteshwor',
            'password' => Hash::make('shikshita123'),
            'profile_photo_path' => '',
        ]);

        User::create([
            'name' => 'Food Cafe',
            'email' => 'food@gmail.com',
            'usertype' => '2',
            'phone' => '0123456789',
            'address' => 'kathmandu',
            'password' => Hash::make('food@food'),
            'profile_photo_path' => '',
        ]);

        User::create([
            'name' => 'Puskar Shrestha',
            'email' => 'puskar@gmail.com',
            'usertype' => '0',
            'phone' => '0123456789',
            'address' => 'kathmandu',
            'password' => Hash::make('puskar123'),
            'profile_photo_path' => '',
        ]);
    }
}