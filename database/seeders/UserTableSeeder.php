<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
               'name'=>'superadmin',
               'email'=>'superadmin@erp.com',
               'password'=>bcrypt('user'),
               'current_Team_id'=> 0,
               'status'=>'1',
               'user_group_id'=>1,
               'created_at' => date("Y-m-d H:i:s"),
               'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'location',
            'email'=>'location@erp.com',
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'hrhead',
            'email'=>'hrhead@erp.com',
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'admin',
            'email'=>'admin@erp.com',
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'projectmanagerHead',
            'email'=>'pmh@erp.com',
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>5,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'projectmanager',
            'email'=>'pm@erp.com',
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'projectleader',
            'email'=>'pl@erp.com',
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>7,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'teamleader',
            'email'=>'tl@erp.com',
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("users")->insert([
            'name'=>'employee',
            'email'=>'employee@erp.com',
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>9,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //
        

    }
}
