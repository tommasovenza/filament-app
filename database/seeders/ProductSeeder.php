<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 3; $i++) {
            // echo $i;
            Product::create([
                'name' => "Product {$i}",
                'price' => rand(1999, 4999),
                'description' => "lorem ipsum sit dolor amet",
            ]);
        }
    }
}
