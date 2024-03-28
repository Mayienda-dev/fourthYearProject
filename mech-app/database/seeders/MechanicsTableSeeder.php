<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mechanic;

class MechanicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mechanicsRecords = [
            [
                'id' => 1,
                'vendorsbusinessdetail_id' => 1,
                'name' => 'Ned Eddard Stark',
                'mobile' => '0732456732',
                'email' => 'stark@gmail.com',
                'speciality' => 'Engine Specialist',
                'status' => 0
            ],
            [
                'id' => 2,
                'vendorsbusinessdetail_id' => 1,
                'name' => 'Fyodor Dostovoesky',
                'mobile' => '0732456732',
                'email' => 'fyodor@gmail.com',
                'speciality' => 'Engine Specialist',
                'status' => 0
            ],
            [
                'id' => 3,
                'vendorsbusinessdetail_id' => 1,
                'name' => 'George Orwell',
                'mobile' => '0732456732',
                'email' => 'george@gmail.com',
                'speciality' => 'Transmission specialist',
                'status' => 0
            ],
            [
                'id' => 4,
                'vendorsbusinessdetail_id' => 1,
                'name' => 'James Baldwin',
                'mobile' => '0732456732',
                'email' => 'baldwin@gmail.com',
                'speciality' => 'Heating and Air Conditioning specialist',
                'status' => 0
            ],

            // Wisconsin Garage
            [
                'id' => 5,
                'vendorsbusinessdetail_id' => 5,
                'name' => 'Raymond Reddington',
                'mobile' => '0732456732',
                'email' => 'raymond@gmail.com',
                'speciality' => 'Fleet maintenance Specialist',
                'status' => 0
            ],
            [
                'id' => 6,
                'vendorsbusinessdetail_id' => 5,
                'name' => 'Harold Cooper',
                'mobile' => '0732456732',
                'email' => 'harold@gmail.com',
                'speciality' => 'Hybrid and electric vehicle technician',
                'status' => 0
            ],
            [
                'id' => 7,
                'vendorsbusinessdetail_id' => 5,
                'name' => 'Elizabeth Keen',
                'mobile' => '0732456732',
                'email' => 'elizabeth@gmail.com',
                'speciality' => 'Brake Specialist',
                'status' => 0
            ],
            [
                'id' => 8,
                'vendorsbusinessdetail_id' => 5,
                'name' => 'Tom Sawyer',
                'mobile' => '0732456732',
                'email' => 'tomsawer@gmail.com',
                'speciality' => 'Electrical specialist',
                'status' => 0
            ],

            // Theodore Automechanical mechanics
            [
                'id' => 9,
                'vendorsbusinessdetail_id' => 6,
                'name' => 'Jack Sparrow',
                'mobile' => '0732456732',
                'email' => 'sparrow@gmail.com',
                'speciality' => 'Suspension and alignment specialist',
                'status' => 0
            ],
            [
                'id' => 10,
                'vendorsbusinessdetail_id' => 6,
                'name' => 'James Mwangi',
                'mobile' => '0732456732',
                'email' => 'mwangi@gmail.com',
                'speciality' => 'Diagnostic technician',
                'status' => 0
            ],
            [
                'id' => 11,
                'vendorsbusinessdetail_id' => 6,
                'name' => 'Ambrose Weda',
                'mobile' => '0732456732',
                'email' => 'ambrose@gmail.com',
                'speciality' => 'Diagnostic technician',
                'status' => 0
            ],
            [
                'id' => 12,
                'vendorsbusinessdetail_id' => 6,
                'name' => 'Winston Churchill',
                'mobile' => '0732456732',
                'email' => 'winston@gmail.com',
                'speciality' => 'Fleet maintenance technician',
                'status' => 0
            ],
            [
                'id' => 13,
                'vendorsbusinessdetail_id' => 6,
                'name' => 'Thomas Shelby',
                'mobile' => '0732456732',
                'email' => 'shelby@gmail.com',
                'speciality' => 'Hybrid and electric vehicle technicians',
                'status' => 0
            ],

            // Chapelle Mechanics
            [
                'id' => 14,
                'vendorsbusinessdetail_id' => 9,
                'name' => 'Max Verstappen',
                'mobile' => '0732456732',
                'email' => 'max@gmail.com',
                'speciality' => 'Performance optimization technician',
                'status' => 0
            ],
            [
                'id' => 15,
                'vendorsbusinessdetail_id' => 9,
                'name' => 'Lewis Hamilton',
                'mobile' => '0732456732',
                'email' => 'lewis@gmail.com',
                'speciality' => 'Performance optimization technician',
                'status' => 0
            ],
            [
                'id' => 16,
                'vendorsbusinessdetail_id' => 9,
                'name' => 'Tom Hank',
                'mobile' => '0732456732',
                'email' => 'hank@gmail.com',
                'speciality' => 'Performance optimization technician',
                'status' => 0
            ],

            // Tucker Automotive mechanics
            [
                'id' => 17,
                'vendorsbusinessdetail_id' => 11,
                'name' => 'Jeremy Clark',
                'mobile' => '0732456732',
                'email' => 'jeremy@gmail.com',
                'speciality' => 'Bodywork and paint specialist',
                'status' => 0
            ],
            [
                'id' => 18,
                'vendorsbusinessdetail_id' => 11,
                'name' => 'Bennyhim Sam',
                'mobile' => '0732456732',
                'email' => 'benny@gmail.com',
                'speciality' => 'Bodywork and paint specialist',
                'status' => 0
            ],
            [
                'id' => 19,
                'vendorsbusinessdetail_id' => 11,
                'name' => 'Anthony Havard',
                'mobile' => '0732456732',
                'email' => 'havard@gmail.com',
                'speciality' => 'Bodywork and paint specialist',
                'status' => 0
            ],
            [
                'id' => 20,
                'vendorsbusinessdetail_id' => 11,
                'name' => 'Austin Ben',
                'mobile' => '0732456732',
                'email' => 'austin@gmail.com',
                'speciality' => 'Customization Artisan',
                'status' =>0
            ],
            [
                'id' => 21,
                'vendorsbusinessdetail_id' => 11,
                'name' => 'Sam Altman',
                'mobile' => '0732456732',
                'email' => 'altman@gmail.com',
                'speciality' => 'Vintage Restoration specialist',
                'status' => 0
            ],
        ];

        Mechanic::insert($mechanicsRecords);
    }
}
