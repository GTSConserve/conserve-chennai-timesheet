<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usergroups')->insert(
            [
                'name' => "Super-Admin",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "Location-Head",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "HR-Head",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
       
        DB::table('usergroups')->insert(
            [
                'name' => "Administration-Head",
               
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "ProjectManager-Head",
               
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "Project-Manager",
                
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );


        DB::table('usergroups')->insert(
            [
                'name' => "Project-Lead",
               
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "Team-Lead",
                
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "Employee",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
    }
}
