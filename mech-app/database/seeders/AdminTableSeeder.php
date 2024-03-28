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
            ['id'=>1, 'name'=>'Admin', 'type'=>'admin', 'vendor_id' =>0,  'mobile'=>'0757278442', 'email'=> 'admin@admin.com', 'password'=>$password, 'image'=>'','status'=>1],
            ['id'=>2, 'name'=>'Reagan', 'type'=>'subadmin', 'vendor_id' =>0,  'mobile'=>'0741984912', 'email'=> 'reagan@admin.com', 'password'=>$password, 'image'=>'','status'=>1],
            ['id'=>3, 'name'=>'John', 'type'=>'subadmin', 'vendor_id' =>0,  'mobile'=>'0741984912', 'email'=> 'john@admin.com', 'password'=>$password, 'image'=>'','status'=>1],
            ['id'=>4, 'name'=>'Henry Ford', 'type'=>'vendor', 'vendor_id' =>1,  'mobile'=>'0701625289', 'email'=> 'henryford@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>5, 'name'=>'James Lannister', 'type'=>'vendor', 'vendor_id' =>2,  'mobile'=>'0701625289', 'email'=> 'lanister@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>6, 'name'=>'Tywin Lannister', 'type'=>'vendor', 'vendor_id' =>3,  'mobile'=>'0701625289', 'email'=> 'tywin@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>7, 'name'=>'Jon Snow', 'type'=>'vendor', 'vendor_id' =>4,  'mobile'=>'0701625289', 'email'=> 'snow@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>8, 'name'=>'George Bush', 'type'=>'vendor', 'vendor_id' =>5,  'mobile'=>'0701625289', 'email'=> 'georgebush@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>9, 'name'=>'Theodore Roosevelt', 'type'=>'vendor', 'vendor_id' =>6,  'mobile'=>'0701625289', 'email'=> 'roosevelt@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>10, 'name'=>'Henry Ford', 'type'=>'vendor', 'vendor_id' =>7,  'mobile'=>'0701625289', 'email'=> 'doe@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>11, 'name'=>'Jessica Doe', 'type'=>'vendor', 'vendor_id' =>8,  'mobile'=>'0701625289', 'email'=> 'jessicadoe@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>12, 'name'=>'Dave Chappelle', 'type'=>'vendor', 'vendor_id' =>9,  'mobile'=>'0701625289', 'email'=> 'davechapelle@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>13, 'name'=>'Richard Pryor', 'type'=>'vendor', 'vendor_id' =>10,  'mobile'=>'0701625289', 'email'=> 'richardpryor@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
            ['id'=>14, 'name'=>'Chris Tucker', 'type'=>'vendor', 'vendor_id' =>11,  'mobile'=>'0701625289', 'email'=> 'tucker@gmail.com', 'password'=>$password, 'image'=>'','status'=>0],
           

        ];
      



        Admin::insert($adminRecords);
        
    }
}
