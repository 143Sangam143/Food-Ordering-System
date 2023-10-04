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
                'category' => 'Burger',
                'description' => 'Burger are the best lunch in the world',
                'image' => 'burger.png',
            ],

            [
                'category' => 'Pizza',
                'description' => 'Pizza are the best appetizer in the world',
                'image' => 'pizza.png',
            ],
        ];

        Product::insert($categories);
    }
}
