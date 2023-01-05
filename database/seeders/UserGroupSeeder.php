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
                'name' => "Director",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "Location-Head",
                "is_admin"=>"0",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "HR-Head",
                "is_admin"=>"0",
                'name' => "Super-Admin",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
       
        DB::table('usergroups')->insert(
            [
                'name' => "Administration-Head",
                "is_admin"=>"0",
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
                "is_admin"=>"0",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );

        DB::table('usergroups')->insert(
            [
                'name' => "Project-Lead",
                "is_admin"=>"0",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "Team-Lead",
                "is_admin"=>"0",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroups')->insert(
            [
                'name' => "Employee",
                "is_admin"=>"0",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
    }
}
