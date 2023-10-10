<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'latitude' => '27.7415332',
                'longitude' => '85.3444215',
            ],

            [
                'latitude' => '27.7414438',
                'longitude' => '85.3445109',
            ],

            [
                'latitude' => '27.7411322',
                'longitude' => '85.3448225',
            ],

            [
                'latitude' => '27.7412216',
                'longitude' => '85.3445109',
            ],
        ];

        Location::insert($locations);
    }
}
