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
                'usergroup_experience_id'=>1,
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Engineering Trainee",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Drafter",
                'usergroup_experience_id'=>2,
                'usergroup_department_id'=>"1",
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Modeler",
                'usergroup_experience_id'=>2,
                'usergroup_department_id'=>"1",
                'usergroup_grade_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Engineer",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>2,
                'usergroup_grade_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Domain Drafter",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>3,
                'usergroup_grade_id'=>4,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Domain Modeler",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>3,
                'usergroup_grade_id'=>5,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Domain Engineer",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>3,
                'usergroup_grade_id'=>6,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Drafter",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>4,
                'usergroup_grade_id'=>7,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Modeler",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>4,
                'usergroup_grade_id'=>8,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Engineer",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>4,
                'usergroup_grade_id'=>9,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant Manager",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>5,
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Project Manager",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>6,
                'usergroup_grade_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Project Manager",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>7,
                'usergroup_grade_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Head Of Department",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>8,
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Operation Manager",
                'usergroup_experience_id'=>9,
                'usergroup_department_id'=>"1",
                'usergroup_grade_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant General Manager",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>10,
                'usergroup_grade_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Deputy General Manager",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>10,
                'usergroup_grade_id'=>4,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "General Manager",
                'usergroup_department_id'=>"1",
                'usergroup_experience_id'=>10,
                'usergroup_grade_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
     
        // DB::table('usergroup_desiginations')->insert(
        //     [
        //         'name' => "Regional Manager",
        //         'usergroup_department_id'=>"1",
        //         'usergroup_experience_id'=>11,
        //         'usergroup_grade_id'=>1,
        //         'status'=>'1',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],
        // );
        // DB::table('usergroup_desiginations')->insert(
        //     [
        //         'name' => "Vice President",
        //         'usergroup_department_id'=>"1",
        //         'usergroup_experience_id'=>11,
        //         'usergroup_grade_id'=>2,
        //         'status'=>'1',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],
        // );
        // DB::table('usergroup_desiginations')->insert(
        //     [
        //         'name' => "Senior Vice President",
        //         'usergroup_department_id'=>"1",
        //         'usergroup_experience_id'=>11,
        //         'usergroup_grade_id'=>3,
        //         'status'=>'1',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],
        // );
       
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Intern",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>1,
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Management Trainee",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Executive HR",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Executive Admin",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Junior Executive Finance",
                'usergroup_experience_id'=>2,
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
                'usergroup_experience_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Executive Admin",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Executive Finance",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Executive HR",
                'usergroup_experience_id'=>4,
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
                'usergroup_experience_id'=>4,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Executive Finance",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>4,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Lead HR",
                'usergroup_department_id'=>"2",
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Lead Admin",
                'usergroup_department_id'=>"2",
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Lead Finance",
                'usergroup_department_id'=>"2",
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant Manager",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>7,
                'usergroup_grade_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Manager HR",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>8,
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Manager Admin",
                'usergroup_experience_id'=>8,
                'usergroup_department_id'=>"2",
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Manager Finance",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>8,
                'usergroup_grade_id'=>1,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Manager HR",
                'usergroup_experience_id'=>9,
                'usergroup_department_id'=>"2",
                'usergroup_grade_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Manager Admin",
                'usergroup_experience_id'=>9,
                'usergroup_department_id'=>"2",
                'usergroup_grade_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Senior Manager Finance",
                'usergroup_experience_id'=>9,
                'usergroup_department_id'=>"2",
                'usergroup_grade_id'=>2,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Assistant General Manager",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>10,
                'usergroup_grade_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "General Manager",
                'usergroup_department_id'=>"2",
                'usergroup_experience_id'=>10,
                'usergroup_grade_id'=>3,
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
      
        // DB::table('usergroup_desiginations')->insert(
        //     [
        //         'name' => "Vice President",
        //         'usergroup_experience_id'=>11,
        //         'usergroup_department_id'=>"2",
        //         'usergroup_grade_id'=>2,
        //         'status'=>'1',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],
        // );
        // DB::table('usergroup_desiginations')->insert(
        //     [
        //         'name' => "Senior Vice President",
        //         'usergroup_experience_id'=>11,
        //         'usergroup_department_id'=>"2",
        //         'usergroup_grade_id'=>3,
        //         'status'=>'1',
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
        //     ],
        // );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Location Head",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
        DB::table('usergroup_desiginations')->insert(
            [
                'name' => "Director",
                'status'=>'1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        );
    }
}
