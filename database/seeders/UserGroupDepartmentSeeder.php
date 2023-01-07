<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGroupDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("usergroup_departments")->insert([
            'name'=>'Engineering',
            'status'=>'1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
     ]);
    
 DB::table("usergroup_departments")->insert([
    'name'=>'Admin',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_departments")->insert([
    'name'=>'Finance',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_departments")->insert([
    'name'=>'Hr',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_departments")->insert([
    'name'=>'Location Head',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_departments")->insert([
    'name'=>'Director',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);


    }
}
