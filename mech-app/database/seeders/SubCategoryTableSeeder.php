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
                'sub_category' => 'engine_services'
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'sub_category' => 'brake_services'
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'sub_category' => 'suspension_services'
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'sub_category' => 'transmission_services'
            ],
            // Towing and Flatbed Services Sub Categories
            [
                'id' => 5,
                'category_id' => 2,
                'sub_category' => 'emergency_towing'
            ],
            [
                'id' => 6,
                'category_id' => 2,
                'sub_category' => 'flatbed_services'
            ],
            // Consultancy Services Sub categories
            [
                'id' => 7,
                'category_id' => 3,
                'sub_category' => 'pre_purchase_inspection'
            ],
            [
                'id' => 8,
                'category_id' => 3,
                'sub_category' => 'diagnostic_services'
            ],
            [
                'id' => 9,
                'category_id' => 3,
                'sub_category' => 'modification_tuning'
            ],
            // Electronic Diagnostics sub categories
            [
                'id' => 10,
                'category_id' => 4,
                'sub_category' => 'engine_control_unit_diagnostics'
            ],
            [
                'id' => 11,
                'category_id' => 4,
                'sub_category' => 'electrical_system_diagnostics'
            ],
            // Car restoration sub categories
            [
                'id' => 12,
                'category_id' => 5,
                'sub_category' => 'bodywork_restoration'
            ],
            [
                'id' => 13,
                'category_id' => 5,
                'sub_category' => 'interior_restoration'
            ],
            // Modding and Tuning Vehicles
            [
                'id' => 14,
                'category_id' => 6,
                'sub_category' => 'performance_upgrades'
            ],
            [
                'id' => 15,
                'category_id' => 6,
                'sub_category' => 'aesthetic_modifications'
            ],
            // Maintenance Services
            [
                'id' => 16,
                'category_id' => 7,
                'sub_category' => 'scheduled_maintenance'
            ],
            [
                'id' => 17,
                'category_id' => 7,
                'sub_category' => 'routine_tuneups'
            ],
            [
                'id' => 18,
                'category_id' => 7,
                'sub_category' => 'fluid_flushes'
            ],
            [
                'id' => 19,
                'category_id' => 7,
                'sub_category' => 'battery_maintenance'
            ],
            [
                'id' => 20,
                'category_id' => 7,
                'sub_category' => 'brake_system_maintenance'
            ],
            [
                'id' => 21,
                'category_id' => 7,
                'sub_category' => 'suspension_steering_maintenance'
            ],
            [
                'id' => 22,
                'category_id' => 7,
                'sub_category' => 'hv_ac_system_maintenance'
            ],
            [
                'id' => 23,
                'category_id' => 7,
                'sub_category' => 'exhaust_system_maintenance'
            ],
            ];
            SubCategory::insert($subcategoriesRecords);
    }
}
