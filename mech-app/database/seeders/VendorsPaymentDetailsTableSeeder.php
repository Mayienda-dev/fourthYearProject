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
                

            ],
            [
                'id' =>2,
                'vendor_id' => 2,
                'mpesaname' => 'James Lannister',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>3,
                'vendor_id' => 3,
                'mpesaname' => 'Tywin Lannister',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>4,
                'vendor_id' => 4,
                'mpesaname' => 'Jon Snow',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>5,
                'vendor_id' => 5,
                'mpesaname' => 'George Bush',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>6,
                'vendor_id' => 6,
                'mpesaname' => 'Theodore Roosevelt',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>7,
                'vendor_id' => 7,
                'mpesaname' => 'Joseph Doe',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>8,
                'vendor_id' => 8,
                'mpesaname' => 'Jessica Doe',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>9,
                'vendor_id' => 9,
                'mpesaname' => 'Dave Chappelle',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>10,
                'vendor_id' => 10,
                'mpesaname' => 'Richard Pryor',
                'mpesamobile' => '0733498916',
                

            ],
            [
                'id' =>11,
                'vendor_id' => 11,
                'mpesaname' => 'Chris Tucker',
                'mpesamobile' => '0733498916',
                

            ],
            ];

            VendorsPaymentDetail::insert($vendorRecords);
    }
}
