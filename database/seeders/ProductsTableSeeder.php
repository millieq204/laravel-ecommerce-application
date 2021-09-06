<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Wheel',
            'slug' => 'wheel',
            'details' => 'round',
            'price' => 345,
            'description' => 'spins',
        ]);
    }
}
