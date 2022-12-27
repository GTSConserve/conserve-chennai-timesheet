<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
            [
                'user_id' => "1",
                'first_name' => 'Super-admin',
                'employee_access' => '1',
            ],
        );
        DB::table('employees')->insert(
            [
                'user_id' => "2",
                'first_name' => 'Location-Head',
                'employee_access' => '2',
            ],
        );
        DB::table('employees')->insert(
            [
                'user_id' => "3",
                'first_name' => 'HR-Head',
                'employee_access' => '3',
            ],
        );
        DB::table('employees')->insert(
            [
                'user_id' => "4",
                'first_name' => 'Administration-Head',
                'employee_access' => '4',
            ],
        );
        DB::table('employees')->insert(
            [
                'user_id' => "5",
                'first_name' => 'HPM',
                'employee_access' => '5',
            ],
        );
        DB::table('employees')->insert(
            [
                'user_id' => "6",
                'first_name' => 'Pm',
                'employee_access' => '6',
            ],
        );
        DB::table('employees')->insert(
            [
                'user_id' => "7",
                'first_name' => 'pl',
                'employee_access' => '7',
            ],
        );
        DB::table('employees')->insert(
            [
                'user_id' => "8",
                'first_name' => 'tl',
                'employee_access' => '8',
            ],
        );
        DB::table('employees')->insert(
            [
                'user_id' => "9",
                'first_name' => 'Employee',
                'employee_access' => '9',
            ],
        );
    }
}
