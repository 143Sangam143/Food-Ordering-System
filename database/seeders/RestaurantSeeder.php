<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = [
            [
                'restaurant' => 'Food Cafe',
                'email' =>  'food@gmail.com',
                'phone' => '0123456789',
                'address' => 'Kathmandu, Nepal',
                'image' => 'restaurant-1.png',

            ],
        ];

        Restaurant::insert($restaurants);
    }
}
