<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserGroupDesiginationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Intern",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Engineering Trainee",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Drafter",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Modeler",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Engineer",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Domain Drafter",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Domain Modeler",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Domain Engineer",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Drafter",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Modeler",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Engineer",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant Manager",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Project Manager",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Project Manager",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Head Of Department",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Operation Manager",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant General Manager",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "General Manager",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Country Manager",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Regional Manager",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Vice President",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Vice President",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Director",
                'usergroup_department_id'=>"1",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Intern",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Management Trainee",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Executive HR",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Executive Admin",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Executive Finance",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Executive HR",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Executive Admin",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Executive Finance",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Executive HR",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Executive Admin",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Executive Finance",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Lead HR",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Lead Admin",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Lead Finance",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant Manager",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Manager HR",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Manager Admin",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Manager Finance",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Manager HR",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Manager Admin",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Manager Finance",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant General Manager",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "General Manager",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant Vice President",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Vice President",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Vice President",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Director",
                'usergroup_department_id'=>"2",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
    }
}
