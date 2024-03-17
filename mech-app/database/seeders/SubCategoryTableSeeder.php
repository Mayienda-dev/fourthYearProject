<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategoriesRecords = [
            // Mechanical Services Sub Categories
            [
                'id' => 1,
                'category_id' => 1,
                'sub_category' => 'Engine services'
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'sub_category' => 'Brake services'
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'sub_category' => 'Suspension services'
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'sub_category' => 'Transmission services'
            ],
            // Towing and Flatbed Services Sub Categories
            [
                'id' => 5,
                'category_id' => 2,
                'sub_category' => 'Emergency Towing'
            ],
            [
                'id' => 6,
                'category_id' => 2,
                'sub_category' => 'Flatbed services'
            ],
            // Consultancy Services Sub categories
            [
                'id' => 7,
                'category_id' => 3,
                'sub_category' => 'Pre-Purchase inspection'
            ],
            [
                'id' => 8,
                'category_id' => 3,
                'sub_category' => 'Diagnostic services'
            ],
            [
                'id' => 9,
                'category_id' => 3,
                'sub_category' => 'Modification and tuning'
            ],
            // Electronic Diagnostics sub categories
            [
                'id' => 10,
                'category_id' => 4,
                'sub_category' => 'Engine Control Unit diagnostics'
            ],
            [
                'id' => 11,
                'category_id' => 4,
                'sub_category' => 'Electrical system diagnostics'
            ],
            // Car restoration sub categories
            [
                'id' => 12,
                'category_id' => 5,
                'sub_category' => 'Bodywork restoration'
            ],
            [
                'id' => 13,
                'category_id' => 5,
                'sub_category' => 'Interior restoration'
            ],
            // Modding and Tuning Vehicles
            [
                'id' => 14,
                'category_id' => 6,
                'sub_category' => 'Performance upgrades'
            ],
            [
                'id' => 15,
                'category_id' => 6,
                'sub_category' => 'Aesthetic modifications'
            ],
            // Maintenance Services
            [
                'id' => 16,
                'category_id' => 7,
                'sub_category' => 'Scheduled maintenance'
            ],
            [
                'id' => 17,
                'category_id' => 7,
                'sub_category' => 'Routine Tune-Ups'
            ],
            [
                'id' => 18,
                'category_id' => 7,
                'sub_category' => 'Fluid flushes'
            ],
            [
                'id' => 19,
                'category_id' => 7,
                'sub_category' => 'Battery maintenance'
            ],
            [
                'id' => 20,
                'category_id' => 7,
                'sub_category' => 'Brake system maintenance'
            ],
            [
                'id' => 21,
                'category_id' => 7,
                'sub_category' => 'Suspension and Steering maintenance'
            ],
            [
                'id' => 22,
                'category_id' => 7,
                'sub_category' => 'HVAC system maintenance'
            ],
            [
                'id' => 23,
                'category_id' => 7,
                'sub_category' => 'Exhaust system maintenance'
            ],
            ];
            SubCategory::insert($subcategoriesRecords);
    }
}
