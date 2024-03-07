<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendors;
class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            [
                'id' => 1,
                'name'=> 'Henry Ford',
                'mobile'=> '0701625289',
                'email' => 'henryford@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Westlands',
                'niche' => 'mechanical services',
                'status' => 0,
            ]

        ];

        Vendors::insert($vendorRecords);
    }
}
