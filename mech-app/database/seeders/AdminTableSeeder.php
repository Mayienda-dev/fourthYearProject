<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $adminRecords = [
            ['id'=>2, 'name'=>'Reagan', 'type'=>'subadmin', 'vendor_id' =>0,  'mobile'=>'0741984912', 'email'=> 'reagan@admin.com', 'password'=>$password, 'image'=>'','status'=>1],
            ['id'=>3, 'name'=>'John', 'type'=>'subadmin', 'vendor_id' =>0,  'mobile'=>'0741984912', 'email'=> 'john@admin.com', 'password'=>$password, 'image'=>'','status'=>1],
            

        ];
      



        Admin::insert($adminRecords);
        
    }
}
