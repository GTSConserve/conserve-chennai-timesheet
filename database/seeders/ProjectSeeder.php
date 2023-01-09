<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
            [
                'name' => "project1",
                'status'=>'1',
                'billable_man_hour'=>10,
                'non_billable_man_hour'=>5,
                'location_id'=>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('projects')->insert(
            [
                'name' => "project2",
                'status'=>'1',
                'billable_man_hour'=>20,
                'non_billable_man_hour'=>10,
                'location_id'=>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('projects')->insert(
            [
                'name' => "project3",
                'status'=>'1',
                'billable_man_hour'=>30,
                'non_billable_man_hour'=>15,
                'location_id'=>1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
    
    }
}
