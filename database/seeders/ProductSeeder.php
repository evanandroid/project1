<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    \App\Models\Product::insert([
        [
            'name' => 'Iphone 16',
            'image' => 'images/iphone16.jpg',
            'description' => 'Black',
            'color' => 'Black',
            'release_year' => 2025,
            'price' => 25000000
        ],
        [
            'name' => 'Samsung Galaxy S24',
            'image' => 'images/galaxyS24.jpg',
            'description' => 'Charcoal',
            'color' => 'Charcoal',
            'release_year' => 2025,
            'price' => 18000000
        ]
    ]);
}

}
