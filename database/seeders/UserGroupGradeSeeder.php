<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserGroupGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("usergroup_grades")->insert([
               'name'=>'Grade A',
               'status'=>'1',
               'created_at' => date("Y-m-d H:i:s"),
               'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table("usergroup_grades")->insert([
            'name'=>'Grade B',
            'status'=>'1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
     ]);
     DB::table("usergroup_grades")->insert([
        'name'=>'Grade C',
        'status'=>'1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
 ]);
     DB::table("usergroup_grades")->insert([
        'name'=>'Grade D',
        'status'=>'1',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
 ]);
 DB::table("usergroup_grades")->insert([
    'name'=>'Grade E',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_grades")->insert([
    'name'=>'Grade F',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_grades")->insert([
    'name'=>'Grade G',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_grades")->insert([
    'name'=>'Grade H',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
DB::table("usergroup_grades")->insert([
    'name'=>'Grade I',
    'status'=>'1',
    'created_at' => date("Y-m-d H:i:s"),
    'updated_at' => date("Y-m-d H:i:s"),
]);
      
    }
}
