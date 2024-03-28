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
                'service' => '',
                'garage_name' => 'Dreamville Automechanical Services',
                'garage_address' => 'Ngara',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'dreamville@garage.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>2,
                'vendor_id' => 2,
                'service' => '',
                'garage_name' => 'Lannister Mechanical Consultancy Services',
                'garage_address' => 'freelance',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'lannister@consultancy.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>3,
                'vendor_id' => 3,
                'service' => '',
                'garage_name' => 'Casterlyrock flatbed and towing',
                'garage_address' => 'Ngara',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'casterlyrock@garage.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>4,
                'vendor_id' => 4,
                'service' => '',
                'garage_name' => 'Snow Automotive Consultancy Services',
                'garage_address' => 'freelance',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'snowconsultancy@gmail.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>5,
                'vendor_id' => 5,
                'service' => '',
                'garage_name' => 'Wisconsin Garage',
                'garage_address' => 'Karen',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'wisconsin@garage.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>6,
                'vendor_id' => 6,
                'service' => '',
                'garage_name' => 'Theodore Automechanical Services',
                'garage_address' => 'Mlolongo',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'theodore@garage.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>7,
                'vendor_id' => 7,
                'service' => '',
                'garage_name' => 'Doe Consultancy',
                'garage_address' => 'freelance',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'doeconsultancy@gmail.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>8,
                'vendor_id' => 8,
                'service' => '',
                'garage_name' => 'Jessica Recovery(Flatbed and Towing)',
                'garage_address' => 'Kasarani',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'jessica@flatbed.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>9,
                'vendor_id' => 9,
                'service' => '',
                'garage_name' => 'Chapelle Automechanical Services',
                'garage_address' => 'Muthaiga',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'davechappelle@gmail.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>10,
                'vendor_id' => 10,
                'service' => '',
                'garage_name' => 'Pryor Consultancy',
                'garage_address' => 'Ngara',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'richardconsultancy@gmail.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
            [
                'id' =>11,
                'vendor_id' => 11,
                'service' => '',
                'garage_name' => 'Tucker Automotive Services',
                'garage_address' => 'Ngara',
                'garage_county' => 'Nairobi',
                'garage_mobile' => '0733498916',
                'garage_email' => 'tuckerautomotive@gmail.com',
                'address_proof' => '',
                'address_proof_image' => '',

            ],
        ];
        VendorsBusinessDetail::insert($vendorRecords);
    }
}
