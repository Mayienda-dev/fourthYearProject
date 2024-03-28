<?php

namespace Database\Seeders;

use App\Models\ServiceSetup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSetupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicesetupRecords = [
            [
                'id' => 1,
                'vendor_id' => 1,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Engine Services,',
                'services' => 'Engine Diagnostics'
            ],
            [
                'id' => 2,
                'vendor_id' => 1,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Engine Services,',
                'services' => 'Engine Rebuild'
            ],
            [
                'id' => 3,
                'vendor_id' => 1,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Engine Services,',
                'services' => 'Oil Change'
            ],

            [
                'id' => 4,
                'vendor_id' => 1,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Engine Services,',
                'services' => 'Engine Tune-up'
            ],
            [
                'id' => 5,
                'vendor_id' => 1,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Transmisson services,',
                'services' => 'Transmission fluid change'
            ],
            [
                'id' => 6,
                'vendor_id' => 1,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Transmisson services,',
                'services' => 'Clutch replacement'
            ],

            // Diagnostic category
            [
                'id' => 7,
                'vendor_id' => 1,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Engine Control Unit diagnostics',
                'services' => 'Check engine light diagnosis'
            ],

            // Maintanance category
            [
                'id' => 8,
                'vendor_id' => 1,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Scheduled maintenance',
                'services' => 'Regular Inspection and Maintenance Checks'
            ],
            [
                'id' => 9,
                'vendor_id' => 1,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Scheduled maintenance',
                'services' => 'Oil change and filter replacement'
            ],

            // Lannister Consultancy
            [
                'id' => 10,
                'vendor_id' => 2,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Pre-Purchase inspection',
                'services' => 'Vehicle Inspection Report'
            ],
            [
                'id' => 11,
                'vendor_id' => 2,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Pre-Purchase inspection',
                'services' => 'Used Car Evaluation'
            ],
            [
                'id' => 12,
                'vendor_id' => 2,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Pre-Purchase inspection',
                'services' => 'Vehicle History Check'
            ],
            [
                'id' => 13,
                'vendor_id' => 2,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Pre-Purchase inspection',
                'services' => 'Buyer Consultation'
            ],

            // Casterlyrock flatbed and towing(Emergency Towing)
            [
                'id' => 14,
                'vendor_id' => 3,
                'category' => 'Towing and Flabed Services',
                'sub_categories' => 'Emergency Towing',
                'services' => 'Local Towing'
            ],
            [
                'id' => 15,
                'vendor_id' => 3,
                'category' => 'Towing and Flabed Services',
                'sub_categories' => 'Emergency Towing',
                'services' => 'Long Distance Towing'
            ],
            [
                'id' => 16,
                'vendor_id' => 3,
                'category' => 'Towing and Flabed Services',
                'sub_categories' => 'Emergency Towing',
                'services' => 'Accident Recovery'
            ],
            [
                'id' => 17,
                'vendor_id' => 3,
                'category' => 'Towing and Flabed Services',
                'sub_categories' => 'Emergency Towing',
                'services' => 'Roadside Assitance'
            ],

            // Snow Automotive Consultancy Services
            [
                'id' => 18,
                'vendor_id' => 4,
                'category' => 'Consulatancy Services',
                'sub_categories' => 'Diagnostic Services',
                'services' => 'Electronic Inspection'
            ],
            [
                'id' => 19,
                'vendor_id' => 4,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Diagnostic Services',
                'services' => 'Perfomance Anaysis'
            ],
            [
                'id' => 20,
                'vendor_id' => 4,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Diagnostic Services',
                'services' => 'Fault Code Reading'
            ],
            [
                'id' => 21,
                'vendor_id' => 4,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Diagnostic Services',
                'services' => 'System Troubleshooting'
            ],

            // Wisconsin Garage (Mechanical: Suspension Services)
            [
                'id' => 22,
                'vendor_id' => 5,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Suspension Services',
                'services' => 'Suspension Inspection'
            ],
            [
                'id' => 23,
                'vendor_id' => 5,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Suspension Services',
                'services' => 'Shock Absorber Replacement'
            ],
            [
                'id' => 24,
                'vendor_id' => 5,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Suspension Services',
                'services' => 'Strut Replacement'
            ],
            [
                'id' => 25,
                'vendor_id' => 5,
                'category' => 'Mechanical Services',
                'sub_categories' => 'Suspension Services',
                'services' => 'Wheel Alignment'
            ],

            // Maintenance: Exhaust System
            [
                'id' => 26,
                'vendor_id' => 5,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Exhaust system maintenance',
                'services' => 'Exhaust pipe inspection and repair'
            ],
            [
                'id' => 27,
                'vendor_id' => 5,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Exhaust system maintenance',
                'services' => 'Muffler Inspection and replacement'
            ],
            [
                'id' => 28,
                'vendor_id' => 5,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Exhaust system maintenance',
                'services' => 'Catalytic converter inspection and replacement'
            ],
            [
                'id' => 29,
                'vendor_id' => 5,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Exhaust system maintenance',
                'services' => 'Exhaust system leak detection and repair'
            ],

            // Maintenance: suspension and steering maintenance
            [
                'id' => 30,
                'vendor_id' => 5,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Suspension and Steering maintenance',
                'services' => 'Shock absorber and strut inspection'
            ],
            [
                'id' => 31,
                'vendor_id' => 5,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Suspension and Steering maintenance',
                'services' => 'Steering system inspection and lubrication'
            ],
            [
                'id' => 32,
                'vendor_id' => 5,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Suspension and Steering maintenance',
                'services' =>'Ball joint and Tie rod end inspection'
            ],
            [
                'id' => 33,
                'vendor_id' => 5,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Suspension and Steering maintenance',
                'services' => 'Wheel alignment and balancing'
            ],

            // Theodore Automechanical Services: Maintenance: Routine Tune-ups
            [
                'id' => 34,
                'vendor_id' => 6,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Routine Tune-Ups',
                'services' => 'Spark plug replacement'
            ],
            [
                'id' => 35,
                'vendor_id' => 6,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Routine Tune-Ups',
                'services' => 'Air filter replacement'
            ],
            [
                'id' => 36,
                'vendor_id' => 6,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Routine Tune-Ups',
                'services' => 'Fuel system cleaning'
            ],
            [
                'id' => 37,
                'vendor_id' => 6,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Routine Tune-Ups',
                'services' => 'Ignition system inspection and adjusment'
            ],

            // Maintenance: Brake system
            [
                'id' => 38,
                'vendor_id' => 6,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Brake system maintenance',
                'services' => 'Brake pad inspection and replacement'
            ],

            [
                'id' => 39,
                'vendor_id' => 6,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Brake system maintenance',
                'services' => 'Brake rotor inspection and resurfacing'
            ],
            [
                'id' => 40,
                'vendor_id' => 6,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Brake system maintenance',
                'services' => 'Brake caliper lubrication and adjustment'
            ],

            [
                'id' => 41,
                'vendor_id' => 6,
                'category' => 'Maintenance Services',
                'sub_categories' => 'Brake system maintenance',
                'services' => 'Brake line inspection and replacement'
            ],

            // Doe consultancy: Modification and Tuning
            [
                'id' => 42,
                'vendor_id' => 7,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Modification and Tuning',
                'services' => 'Perfomance Tuning'
            ],
            [
                'id' => 43,
                'vendor_id' => 7,
                'category' => 'Consultancy Services',
                'sub_categories' => 'Modification and Tuning',
                'services' => 'Engine Modification'
            ],

            // Jessica Recovery(Flatbed)
            [
                'id' => 44,
                'vendor_id' => 8,
                'category' => 'Towing and Flatbed Services',
                'sub_categories' => 'Flatbed services',
                'services' => 'Car Transport'
            ],
            [
                'id' => 45,
                'vendor_id' => 8,
                'category' => 'Towing and Flatbed Services',
                'sub_categories' => 'Flatbed services',
                'services' => 'Motorcycle Transport'
            ],
            [
                'id' => 46,
                'vendor_id' => 8,
                'category' => 'Towing and Flatbed Services',
                'sub_categories' => 'Flatbed services',
                'services' => 'Vehicle Recovery'
            ],
            [
                'id' => 47,
                'vendor_id' => 8,
                'category' => 'Towing and Flatbed Services',
                'sub_categories' => 'Flatbed services',
                'services' => 'Specialty Vehicle Transport'
            ],

            // Chapelle: Moding and Tuning services
            [
                'id' => 48,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Performance upgrades',
                'services' => 'Turbocharger Installation'
            ],
            [
                'id' => 49,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Performance upgrades',
                'services' => 'Supercharger Installation'
            ],
            [
                'id' => 50,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Performance upgrades',
                'services' => 'Exhaust system upgrades'
            ],
            [
                'id' => 51,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Performance upgrades',
                'services' => 'Intake system upgrades'
            ],

            // Chappelle: Aesthetic Modifications
            [
                'id' => 52,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Aesthetic modifications',
                'services' => 'Body kit installation'
            ],
            [
                'id' => 53,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Aesthetic modifications',
                'services' => 'Custom paint jobs'
            ],
            [
                'id' => 54,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Aesthetic modifications',
                'services' => 'Wheel and Tire Upgrades'
            ],
           
            [
                'id' => 55,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Aesthetic modifications',
                'services' => 'Lighting upgrades'
            ],
            [
                'id' => 56,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Aesthetic modifications',
                'services' => 'Offroad modification'
            ],
           
            [
                'id' => 57,
                'vendor_id' => 9,
                'category' => 'Modding and Tuning',
                'sub_categories' => 'Aesthetic modifications',
                'services' => 'Overland kitting'
            ],

            // Pryor consultancy
            [
                'id' => 58,
                'vendor_id' => 10,
                'category' => 'Consultancy services',
                'sub_categories' => 'Modification and tuning',
                'services' => 'Suspension upgrades'
            ],
            [
                'id' => 59,
                'vendor_id' => 10,
                'category' => 'Consultancy services',
                'sub_categories' => 'Modification and tuning',
                'services' => 'Custom Fabrication'
            ],
            // Theodore: Diagnostics
            [
                'id' => 60,
                'vendor_id' => 6,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Engine Control Unit diagnostics',
                'services' => 'Check engine light diagnosis'
            ],
            [
                'id' => 61,
                'vendor_id' => 6,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Engine Control Unit diagnostics',
                'services' => 'ECU Re-programming'
            ],
            [
                'id' => 62,
                'vendor_id' => 6,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Engine Control Unit diagnostics',
                'services' => 'Sensor calibration'
            ],
            [
                'id' => 63,
                'vendor_id' => 6,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Engine Control Unit diagnostics',
                'services' => 'ECU replacement'
            ],

            // Theodore: Electrical system diagnostics
            [
                'id' => 64,
                'vendor_id' => 6,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Electrical system diagnostics',
                'services' => 'Battery Testing'
            ],
            [
                'id' => 65,
                'vendor_id' => 6,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Electrical system diagnostics',
                'services' => 'Alternator Testing'
            ],
            [
                'id' => 66,
                'vendor_id' => 6,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Electrical system diagnostics',
                'services' => 'Wiring inspection'
            ],
            [
                'id' => 67,
                'vendor_id' => 6,
                'category' => 'Electronic Diagnostics',
                'sub_categories' => 'Electrical system diagnostics',
                'services' => 'Electrical component repair'
            ],

            // Tucker Automotive services: Car restoration: Bodywork restoration
            [
                'id' => 68,
                'vendor_id' => 11,
                'category' => 'Car restoration',
                'sub_categories' => 'Bodywork restoration',
                'services' => 'Rust repair'
            ],
            [
                'id' => 69,
                'vendor_id' => 11,
                'category' => 'Car restoration',
                'sub_categories' => 'Bodywork restoration',
                'services' => 'Paint restoration'
            ],
            [
                'id' => 70,
                'vendor_id' => 11,
                'category' => 'Car restoration',
                'sub_categories' => 'Bodywork restoration',
                'services' => 'Panel replacement'
            ],
            [
                'id' => 71,
                'vendor_id' => 11,
                'category' => 'Car restoration',
                'sub_categories' => 'Bodywork restoration',
                'services' => 'Frame repair'
            ],

            // Tucker Automotive services: Car restoration: Interior restoration
            [
                'id' => 72,
                'vendor_id' => 11,
                'category' => 'Car restoration',
                'sub_categories' => 'Interior restoration',
                'services' => 'Upholstery repair'
            ],
            [
                'id' => 73,
                'vendor_id' => 11,
                'category' => 'Car restoration',
                'sub_categories' => 'Interior restoration',
                'services' => 'Dashboard restoration'
            ],
            [
                'id' => 74,
                'vendor_id' => 11,
                'category' => 'Car restoration',
                'sub_categories' => 'Interior restoration',
                'services' => 'Trim replacement'
            ],
            [
                'id' => 75,
                'vendor_id' => 11,
                'category' => 'Car restoration',
                'sub_categories' => 'Interior restoration',
                'services' => 'Interior detailing'
            ],
           
           

           

           

           

           

           

           

           

           

           

           

           








            ];

            ServiceSetup::insert($servicesetupRecords);
    }
}
