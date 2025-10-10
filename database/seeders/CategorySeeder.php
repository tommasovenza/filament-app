<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $dataCategories = [
            'Books',
            'Food',
            'Music CDs',
            'Apps'
        ];


        // data
        for ($i = 0; $i <= 3; $i++) {
            // saving
            Category::create([
                'name' => $dataCategories[$i],
            ]);
        }
    }
}
