<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesRecords = [
            [
                'id' => 1,
                'category' => 'Mechanical Services'
            ],
            [
              'id' => 2,
              'category' => 'Towing and Flatbed Services'
            ],
            [
                'id' => 3,
                'category' => 'Consultancy Services'
            ],
            [
                'id' => 4,
                'category' => 'Electronic Diagnostics'
            ],
            [
                'id' => 5,
                'category' => 'Car Restoration'
            ],
            [
                'id' => 6,
                'category' => 'Modding and Tuning'
            ],
            [
                'id' => 7,
                'category' => 'Maintenance Services'
            ],
            ];

            Category::insert($categoriesRecords);
    }
}
