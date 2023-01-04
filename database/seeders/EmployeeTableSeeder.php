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
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "2",
        //         'first_name' => 'Location-Head',
        //         'employee_access' => '2',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "3",
        //         'first_name' => 'HR-Head',
        //         'employee_access' => '3',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "4",
        //         'first_name' => 'Administration-Head',
        //         'employee_access' => '4',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "5",
        //         'first_name' => 'HPM',
        //         'employee_access' => '5',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "6",
        //         'first_name' => 'Pm',
        //         'employee_access' => '6',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "7",
        //         'first_name' => 'projectleader1',
        //         'employee_access' => '7',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "8",
        //         'first_name' => 'teamleader1',
        //         'employee_access' => '8',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "9",
        //         'first_name' => 'Employee1',
        //         'employee_access' => '9',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "10",
        //         'first_name' => 'projectleader2',
        //         'employee_access' => '7',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "11",
        //         'first_name' => 'teamleader2',
        //         'employee_access' => '8',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "12",
        //         'first_name' => 'Employee2',
        //         'employee_access' => '9',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "13",
        //         'first_name' => 'projectleader3',
        //         'employee_access' => '7',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "14",
        //         'first_name' => 'teamleader3',
        //         'employee_access' => '8',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "15",
        //         'first_name' => 'Employee3',
        //         'employee_access' => '9',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "16",
        //         'first_name' => 'projectleader4',
        //         'employee_access' => '7',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "17",
        //         'first_name' => 'teamleader4',
        //         'employee_access' => '8',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "18",
        //         'first_name' => 'Employee4',
        //         'employee_access' => '9',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "19",
        //         'first_name' => 'projectleader5',
        //         'employee_access' => '7',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "20",
        //         'first_name' => 'teamleader5',
        //         'employee_access' => '8',
        //     ],
        // );
        // DB::table('employees')->insert(
        //     [
        //         'user_id' => "21",
        //         'first_name' => 'Employee5',
        //         'employee_access' => '9',
        //     ],
        // );
      
    }
}
