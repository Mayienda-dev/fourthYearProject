<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBusinessDetail;

class VendorsBusinessDetailsTableSeeder extends Seeder
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
                'garage_name' => 'Dreamville Automechanical Services',
                'garage_address' => 'Ngara',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'dreamville@garage.com',
                'address_proof_image' => '',

            ]
        ];
        VendorsBusinessDetail::insert($vendorRecords);
    }
}
