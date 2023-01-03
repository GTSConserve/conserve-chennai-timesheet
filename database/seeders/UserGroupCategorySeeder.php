<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGroupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("usergroup_categories")->insert([
            'name'=>'Fresher',
            'status'=>'1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
     ]);
     DB::table("usergroup_categories")->insert([
        'name'=>'1-2',
        'status'=>'1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
 ]);
 DB::table("usergroup_categories")->insert([
    'name'=>'2-4',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_categories")->insert([
    'name'=>'4-6',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_categories")->insert([
    'name'=>'6-8',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_categories")->insert([
    'name'=>'8-10',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_categories")->insert([
    'name'=>'10-12',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_categories")->insert([
    'name'=>'12-14',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_categories")->insert([
    'name'=>'14-16',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_categories")->insert([
    'name'=>'16-20',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_categories")->insert([
    'name'=>'Above 20',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
        

    }
}
