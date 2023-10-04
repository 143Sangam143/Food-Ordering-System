<?php

namespace Database\Seeders;

use App\Models\ProductList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            [
                'name'  => 'Veg Burger',
                'description' => 'Veg burger can be eaten in the morining to be full of energy',
                'price' => '150',
                'image' => 'burger-1.png',
                'category' => 'Burger',
            ],
            [
                'name'  => 'Chicken Burger',
                'description' => 'Chicken burger is made to please your taste buds',
                'price' => '220',
                'image' => 'burger-2.png',
                'category' => 'Burger',
            ],
            [
                'name'  => 'Buff Burger',
                'description' => 'Buff burger are in trend now',
                'price' => '180',
                'image' => 'burger-3.png',
                'category' => 'Burger',
            ],
            [
                'name'  => 'Mutton Burger',
                'description' => 'Mutton burger are expensive products',
                'price' => '250',
                'image' => 'burger-4.png',
                'category' => 'Burger',
            ],
            [
                'name'  => 'Paaneer Burger',
                'description' => 'You want something differen, paaneer burger is here just for you',
                'price' => '240',
                'image' => 'burger-5.png',
                'category' => 'Burger',
            ],
            [
                'name'  => 'Mix Burger',
                'description' => 'Mix burger gives you taste of all kind of burger',
                'price' => '280',
                'image' => 'burger-6.png',
                'category' => 'Burger',
            ],
            [
                'name'  => 'Veg Pizza',
                'description' => 'Veg pizza can be eaten in the morining to be full of energy',
                'price' => '150',
                'image' => 'pizza-1.png',
                'category' => 'Pizza',
            ],
            [
                'name'  => 'Chicken Pizza',
                'description' => 'Chicken pizza is made to please your taste buds',
                'price' => '220',
                'image' => 'pizza-2.png',
                'category' => 'Pizza',
            ],
            [
                'name'  => 'Buff Pizza',
                'description' => 'Buff pizza are in trend now',
                'price' => '180',
                'image' => 'pizza-3.png',
                'category' => 'Pizza',
            ],
            [
                'name'  => 'Mutton Pizza',
                'description' => 'Mutton pizza are expensive products',
                'price' => '250',
                'image' => 'pizza-4.png',
                'category' => 'Pizza',
            ],
            [
                'name'  => 'Paaneer Pizza',
                'description' => 'You want something differen, paaneer pizza is here just for you',
                'price' => '240',
                'image' => 'pizza-5.png',
                'category' => 'Pizza',
            ],
            [
                'name'  => 'Mix Pizza',
                'description' => 'Mix pizza gives you taste of all kind of pizza',
                'price' => '280',
                'image' => 'pizza-6.png',
                'category' => 'Pizza',
            ],
            
        ];
        ProductList::insert($lists);
    }
}
