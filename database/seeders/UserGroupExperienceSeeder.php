<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGroupExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("usergroup_experiences")->insert([
            'name'=>'Fresher',
            'usergroup_category_id'=>1,
            'status'=>'1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
     ]);
     DB::table("usergroup_experiences")->insert([
        'name'=>'1-2',
        'usergroup_category_id'=>2,
        'status'=>'1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
 ]);
 DB::table("usergroup_experiences")->insert([
    'name'=>'2-4',
    'usergroup_category_id'=>2,
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_experiences")->insert([
    'name'=>'4-6',
    'usergroup_category_id'=>2,
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_experiences")->insert([
    'name'=>'6-8',
    'usergroup_category_id'=>3,
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_experiences")->insert([
    'name'=>'8-10',
    'usergroup_category_id'=>3,
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_experiences")->insert([
    'name'=>'10-12',
    'usergroup_category_id'=>3,
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_experiences")->insert([
    'name'=>'12-14',
    'usergroup_category_id'=>4,
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_experiences")->insert([
    'name'=>'14-16',
    'usergroup_category_id'=>4,
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_experiences")->insert([
    'name'=>'16-20',
    'usergroup_category_id'=>4,
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_experiences")->insert([
    'name'=>'Above 20',
    'usergroup_category_id'=>5,
    'status'=>'0',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
        

    }
}
