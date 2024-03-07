<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsPaymentDetail;

class VendorsPaymentDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            [
                'id' =>1,
                'vendor_id' => 1,
                'mpesaname' => 'Henry Ford',
                'mpesamobile' => '0733498916',
                

            ]
            ];

            VendorsPaymentDetail::insert($vendorRecords);
    }
}
