<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    // $this->call(CmsPageTableSeeder::class);
    // $this->call(AdminTableSeeder::class);
    // $this->call(VendorsTableSeeder::class);
    // $this->call(VendorsBusinessDetailsTableSeeder::class);
    // $this->call(VendorsPaymentDetailsTableSeeder::class);
    // $this->call(CategoryTableSeeder::class);
    // $this->call(SubCategoryTableSeeder::class);
    // $this->call(ServiceTableSeeder::class);
    // $this->call(ServiceSetupTableSeeder::class);
    $this->call(MechanicsTableSeeder::class);
    }
}
