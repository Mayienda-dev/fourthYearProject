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
            ],
            [
                'id' => 2,
                'name'=> 'James Lanister',
                'mobile'=> '0701625289',
                'email' => 'lanister@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Westlands',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 3,
                'name'=> 'Tywin Lannister',
                'mobile'=> '0701625289',
                'email' => 'tywin@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Westlands',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 4,
                'name'=> 'Jon snow',
                'mobile'=> '0701625289',
                'email' => 'snow@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Westlands',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 5,
                'name'=> 'George Bush',
                'mobile'=> '0701625289',
                'email' => 'bush@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Westlands',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 6,
                'name'=> 'Theodore Roosevelt',
                'mobile'=> '0712345678',
                'email' => 'roosevelt@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Industrial area',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 7,
                'name'=> 'Joseph Doe',
                'mobile'=> '0701625289',
                'email' => 'doe@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Ngara',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 8,
                'name'=> 'Jessica Doe',
                'mobile'=> '0701625289',
                'email' => 'jessicadoe@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Imara Daima',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 9,
                'name'=> 'Dave Chappelle',
                'mobile'=> '0701625289',
                'email' => 'davechapelle@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Westlands',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 10,
                'name'=> 'Richard Pryor',
                'mobile'=> '0701625289',
                'email' => 'richardpryor@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Westlands',
                'niche' => 'mechanical services',
                'status' => 0,
            ],
            [
                'id' => 11,
                'name'=> 'Chris Tucker',
                'mobile'=> '0701625289',
                'email' => 'tucker@gmail.com',
                'county'=> 'Nairobi',
                'physical_address' => 'Westlands',
                'niche' => 'mechanical services',
                'status' => 0,
            ],

        ];

        Vendors::insert($vendorRecords);
    }
}
