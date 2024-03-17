<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicesRecords =
        [
            // Engine Services services
            [
                'id' => 1,
                'subcategory_id' => 1,
                'service' => 'Engine Diagnostics'


            ],
            [
                'id' => 2,
                'subcategory_id' => 1,
                'service' => 'Oil change'


            ],
            [
                'id' => 3,
                'subcategory_id' => 1,
                'service' => 'Engine Tune-up'


            ],
            [
                'id' => 4,
                'subcategory_id' => 1,
                'service' => 'Engine Rebuild'


            ],
            // Brake services services
            [
                'id' => 5,
                'subcategory_id' => 2,
                'service' => 'Brake Inspection'


            ],
            [
                'id' => 6,
                'subcategory_id' => 2,
                'service' => 'Brake Pad Replacement'


            ],
            [
                'id' => 7,
                'subcategory_id' => 2,
                'service' => 'Brake Fluid Flush'


            ],
            [
                'id' => 8,
                'subcategory_id' => 2,
                'service' => 'Brake Rotor Resurfacing'


            ],
            // Suspension services
            [
                'id' => 9,
                'subcategory_id' => 3,
                'service' => 'Suspension Inspection'


            ],
            [
                'id' => 10,
                'subcategory_id' => 3,
                'service' => 'Shock Absorber Replacement'


            ],
            [
                'id' => 11,
                'subcategory_id' => 3,
                'service' => 'Strut Replacement'


            ],
            [
                'id' => 12,
                'subcategory_id' => 3,
                'service' => 'Wheel Alignment'


            ],
            // Transmission services
            [
                'id' => 13,
                'subcategory_id' => 4,
                'service' => 'Transmission Fluid Change'


            ],
            [
                'id' => 14,
                'subcategory_id' => 4,
                'service' => 'Transmission Flush'


            ],
            [
                'id' => 15,
                'subcategory_id' => 4,
                'service' => 'Transmission Repair'


            ],
            [
                'id' => 16,
                'subcategory_id' => 4,
                'service' => 'Suspension Inspection'


            ],

            // Emergency Towing Services
            [
              'id' => 17,
              'subcategory_id' => 5,
              'service' => 'Local Towing'  
            ],
            [
                'id' => 18,
                'subcategory_id' => 5,
                'service' => 'Long Distance Towing'  
              ],
              [
                'id' => 19,
                'subcategory_id' => 5,
                'service' => 'Accident Recovery'  
              ],
              [
                'id' => 20,
                'subcategory_id' => 5,
                'service' => 'Roadside Assistance'  
              ],

            //  Flatbed Services
            [
                'id' => 21,
                'subcategory_id' => 6,
                'service' => 'Car Transport'
            ],
            [
                'id' => 22,
                'subcategory_id' => 6,
                'service' => 'Motorcycle Transport'
            ],
            [
                'id' => 23,
                'subcategory_id' => 6,
                'service' => 'Vehicle Recovery'
            ],
            [
                'id' => 24,
                'subcategory_id' => 6,
                'service' => 'Specialty Vehicle Transport'
            ],

            // Pre-purchase Inspection Services
            [
                'id' => 25,
                'subcategory_id' => 7,
                'service' =>  'Vehicle Inspection Report'
            ],
            [
                'id' => 26,
                'subcategory_id' => 7,
                'service' =>  'Used Car Evaluation'
            ],
            [
                'id' => 27,
                'subcategory_id' => 7,
                'service' =>  'Vehicle History Check'
            ],
            [
                'id' => 28,
                'subcategory_id' => 7,
                'service' =>  'Buyer Consultation'
            ],

            // Consultancy category: Diagnostic Services
            [
                'id' => 29,
                'subcategory_id' => 8,
                'service' => 'Electronic Inspection'
            ],
            [
                'id' => 30,
                'subcategory_id' => 8,
                'service' => 'Performance Analysis'
            ],
            [
                'id' => 31,
                'subcategory_id' => 8,
                'service' => 'Fault Code Reading'
            ],
            [
                'id' => 32,
                'subcategory_id' => 8,
                'service' => 'System Troubleshooting'
            ],

        //Consultancy Services: Modification and Tuning Services
        [
            'id' => 33,
            'subcategory_id' => 9,
            'service' => 'Performance Tuning'
        ],
        [
            'id' => 34,
            'subcategory_id' => 9,
            'service' => 'Engine Modification'
        ],
        [
            'id' => 35,
            'subcategory_id' => 9,
            'service' => 'Suspension upgrades'
        ],
        [
            'id' => 36,
            'subcategory_id' => 9,
            'service' => 'Custom Fabriction'
        ],

        // Electronic Diagnostics: Engine Control Unit Diagnostics Services
        [
            'id' => 37,
            'subcategory_id' => 10,
            'service' => 'Check engine light diagnosis'
        ],
        [
            'id' => 38,
            'subcategory_id' => 10,
            'service' => 'ECU Re-programming'
        ],
        [
            'id' => 39,
            'subcategory_id' => 10,
            'service' => 'Sensor calibration'
        ],
        [
            'id' => 40,
            'subcategory_id' => 10,
            'service' => 'ECU replacement'
        ],

        // Electronic Diagnostics: Electrical system diagnostics
        [
            'id' => 41,
            'subcategory_id' => 11,
            'service' => 'Battery Testing'
        ],
        [
            'id' => 42,
            'subcategory_id' => 11,
            'service' => 'Alternator Testing'
        ],
        [
            'id' => 43,
            'subcategory_id' => 11,
            'service' => 'Wiring inspection'
        ],
        [
            'id' => 44,
            'subcategory_id' => 11,
            'service' => 'Electrical component repair'
        ],

        // Car restoration: Bodywork restoration services
        [
            'id' => 45,
            'subcategory_id' => 12,
            'service' => 'Rust repair'
        ],
        [
            'id' => 46,
            'subcategory_id' => 12,
            'service' => 'Paint restoration'
        ],
        [
            'id' => 47,
            'subcategory_id' => 12,
            'service' => 'Panel replacement'
        ],
        [
            'id' => 48,
            'subcategory_id' => 12,
            'service' => 'Frame repair'
        ],

        // Car restoration: Interior restoration services
        [
            'id' => 49,
            'subcategory_id' => 13,
            'service' => 'Upholstery repair'
        ],
        [
            'id' => 50,
            'subcategory_id' => 13,
            'service' => 'Dashboard restoration'
        ],
        [
            'id' => 51,
            'subcategory_id' => 13,
            'service' => 'Trim replacement'
        ],
        [
            'id' => 52,
            'subcategory_id' => 13,
            'service' => 'Interior detailing'
        ],

        // Modding and Tuning Category: Perfomance Upgrades Services
        [
            'id' => 53,
            'subcategory_id' => 14,
            'service' => 'Turbocharger Installation'
        ],
        [
            'id' => 54,
            'subcategory_id' => 14,
            'service' => 'Supercharger Installation'
        ],
        [
            'id' => 55,
            'subcategory_id' => 14,
            'service' => 'Exhaust system upgrades'
        ],
        [
            'id' => 56,
            'subcategory_id' => 14,
            'service' => 'Intake system upgrades'
        ],

        // Modding and Tuning Vehicles: Aesthetic Modifications Services
        [
            'id' => 57,
            'subcategory_id' => 15,
            'service' =>  'Body kit installation'
        ],
        [
            'id' => 58,
            'subcategory_id' => 15,
            'service' =>  'Custom paint jobs'
        ],
        [
            'id' => 59,
            'subcategory_id' => 15,
            'service' =>  'Wheel and Tire Upgrades'
        ],
        [
            'id' => 60,
            'subcategory_id' => 15,
            'service' =>  'Lighting upgrades'
        ],
        [
            'id' => 61,
            'subcategory_id' => 15,
            'service' =>  'Offroad modification'
        ],
        [
            'id' => 62,
            'subcategory_id' => 15,
            'service' =>  'Overland kitting'
        ],

        // Mantenance category: Scheduled maintenance services
        [
            'id' => 63,
            'subcategory_id' => 16,
            'service' => 'Regular Inspection and Maintenance Checks'
        ],
        [
            'id' => 64,
            'subcategory_id' => 16,
            'service' => 'Oil change and filter replacement'
        ],
        [
            'id' => 65,
            'subcategory_id' => 16,
            'service' => 'Fluid level checks and Top-ups(Coolant, Brake Fluid, etc)'
        ],
        [
            'id' => 66,
            'subcategory_id' => 16,
            'service' => 'Tire rotation and pressure check'
        ],

         // Mantenance category: Routine Tune-ups
         [
            'id' => 67,
            'subcategory_id' => 17,
            'service' => 'Spark plug replacement' 
         ],
         [
            'id' => 68,
            'subcategory_id' => 17,
            'service' => 'Air filter replacement' 
         ],
         [
            'id' => 69,
            'subcategory_id' => 17,
            'service' => 'Fuel system cleaning' 
         ],
         [
            'id' => 70,
            'subcategory_id' => 17,
            'service' => 'Ignition system inspection and adjusment' 
         ],

        // Mantenance category: Fluid flushes
        [
            'id' => 71,
            'subcategory_id' => 18,
            'service' => 'Coolant Flush and Replacement'
        ],
        [
            'id' => 72,
            'subcategory_id' => 18,
            'service' => 'Transmission fluid flush and replacement'
        ],
        [
            'id' => 73,
            'subcategory_id' => 18,
            'service' => 'Power steering fluid flush and replacement'
        ],
        [
            'id' => 74,
            'subcategory_id' => 18,
            'service' => 'Brake fluid flush and replacement'
        ],

        // Mantenance category: Battery Maintenance
        [
            'id' => 75,
            'subcategory_id' => 19,
            'service' => 'Battery testing and inspection'
        ],
        [
            'id' => 76,
            'subcategory_id' => 19,
            'service' => 'Terminal cleaning and corrosion prevention'
        ],
        [
            'id' => 77,
            'subcategory_id' => 19,
            'service' => 'Battery replacement'
        ],
        
         // Mantenance category: Brake System Maintenance
         [
            'id' => 78,
            'subcategory_id' => 20,
            'service' => 'Brake pad inspection and replacement'
         ],
         [
            'id' => 79,
            'subcategory_id' => 20,
            'service' => 'Brake rotor inspection and resurfacing'
         ],
         [
            'id' => 80,
            'subcategory_id' => 20,
            'service' => 'Brake caliper lubrication and adjustment'
         ],
         [
            'id' => 81,
            'subcategory_id' => 20,
            'service' => 'Brake line inspection and replacement'
         ],

        // Mantenance category: Suspension and Steering Maintenance
        [
            'id' => 82,
            'subcategory_id' => 21,
            'service' => 'Shock absorber and strut inspection'
        ],
        [
            'id' => 83,
            'subcategory_id' => 21,
            'service' => 'Steering system inspection and lubrication'
        ],
        [
            'id' => 84,
            'subcategory_id' => 21,
            'service' => 'Ball joint and Tie rod end inspection'
        ],
        [
            'id' => 85,
            'subcategory_id' => 21,
            'service' => 'Wheel alignment and balancing'
        ],

         // Mantenance category: HVAC System Maintenance
         [
            'id' => 86,
            'subcategory_id' => 22,
            'service' => 'Air conditioning system inspection and recharging'
         ],
         [
            'id' => 87,
            'subcategory_id' => 22,
            'service' => 'Cabin air filter replacement'
         ],
         [
            'id' => 88,
            'subcategory_id' => 22,
            'service' => 'Heater core inspection and flushing'
         ],
         [
            'id' => 89,
            'subcategory_id' => 22,
            'service' => 'Ventilation system cleaning'
         ],

         // Mantenance category: Exhaust System Maintenance
         [
            'id' => 90,
            'subcategory_id' => 23,
            'service' => 'Exhaust pipe inspection and repair'
         ],
         [
            'id' => 91,
            'subcategory_id' => 23,
            'service' => 'Muffler Inspection and replacement'
         ],
         [
            'id' => 92,
            'subcategory_id' => 23,
            'service' => 'Catalytic converter inspection and replacement'
         ],
         [
            'id' => 93,
            'subcategory_id' => 23,
            'service' => 'Exhaust  system leak detection and repair'
         ],
        


        ];

        Service::insert($servicesRecords);
}
}
