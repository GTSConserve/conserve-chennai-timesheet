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
               'name'=>'Director',
               'email'=>'director@erp.com',
               'usergroup_category_id'=>6,
               'usergroup_desigination_id'=>44,
               'password'=>bcrypt('user'),
               'current_Team_id'=> 0,
               'status'=>'1',
               'user_group_id'=>1,
               'created_at' => date("Y-m-d H:i:s"),
               'updated_at' => date("Y-m-d H:i:s"),
        ]);
       
        DB::table("users")->insert([
            'name'=>'Location',
            'email'=>'location@erp.com',
            'usergroup_category_id'=>5,
            'usergroup_desigination_id'=>43,
            'password'=>bcrypt('user'),
            'current_Team_id'=> 0,
            'status'=>'1',
            'user_group_id'=>2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
     
        // DB::table("users")->insert([
        //     'name'=>'hrhead',
        //     'email'=>'hrhead@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>3,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'admin',
        //     'email'=>'admin@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>4,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'projectmanagerHead',
        //     'email'=>'pmh@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>5,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'projectmanager',
        //     'email'=>'pm@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>6,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'projectleader1',
        //     'email'=>'pl1@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>7,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'teamleader1',
        //     'email'=>'tl1@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>8,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'employee1',
        //     'email'=>'employee1@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>9,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'projectleader2',
        //     'email'=>'pl2@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>7,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'teamleader2',
        //     'email'=>'tl2@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>8,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'employee2',
        //     'email'=>'employee2@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>9,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'projectleader3',
        //     'email'=>'pl3@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>7,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'teamleader3',
        //     'email'=>'tl3@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>8,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'employee3',
        //     'email'=>'employee3@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>9,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'projectleader4',
        //     'email'=>'pl4@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>7,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'teamleader4',
        //     'email'=>'tl4@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>8,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'employee4',
        //     'email'=>'employee4@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>9,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'projectleader5',
        //     'email'=>'pl5@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>7,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'teamleader5',
        //     'email'=>'tl5@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>8,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        // DB::table("users")->insert([
        //     'name'=>'employee5',
        //     'email'=>'employee5@erp.com',
        //     'password'=>bcrypt('user'),
        //     'current_Team_id'=> 0,
        //     'status'=>'1',
        //     'user_group_id'=>9,
        //     'created_at' => date("Y-m-d H:i:s"),
        //     'updated_at' => date("Y-m-d H:i:s"),
        // ]);
        
        

    }
}
