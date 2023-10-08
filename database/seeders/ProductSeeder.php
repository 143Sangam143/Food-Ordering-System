<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category' => 'burger',
                'description' => 'Burger are the best lunch in the world',
                'image' => 'burger.png',
                'restaurant_email' => 'food@gmail.com',
                'restaurant_id' => '5',
            ],

            [
                'category' => 'pizza',
                'description' => 'Pizza are the best appetizer in the world',
                'image' => 'pizza.png',
                'restaurant_email' => '',
                'restaurant_id' => '',
            ],
        ];

        Product::insert($categories);
    }
}
