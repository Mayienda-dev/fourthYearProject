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
                'category' => 'mechanical'
            ],
            [
              'id' => 2,
              'category' => 'towing_flatbed'
            ],
            [
                'id' => 3,
                'category' => 'consultancy'
            ],
            [
                'id' => 4,
                'category' => 'electronic_diagnostics'
            ],
            [
                'id' => 5,
                'category' => 'car_restoration'
            ],
            [
                'id' => 6,
                'category' => 'modding_tuning'
            ],
            [
                'id' => 7,
                'category' => 'maintenance'
            ],
            ];

            Category::insert($categoriesRecords);
    }
}
