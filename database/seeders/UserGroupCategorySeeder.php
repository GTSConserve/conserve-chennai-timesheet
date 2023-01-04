<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserGroupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usergroup_categories')->insert(
            [
                'name' => "Team Member",
                'type' => "L1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_categories')->insert(
            [
                'name'=>"Junior Management",
                'type' => "L2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_categories')->insert(
            [
                'name'=>"Middle Management",
                'type' => "L3",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_categories')->insert(
            [
                'name' => "Senior Management",
                "type"=>"L4",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_categories')->insert(
            [
                'name'=>"Leadership Team",
                'type' => "L5",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_categories')->insert(
            [
                'name' => "Director",
                'type'=>"L6",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
    }
}
