<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(ActivityLinkSeeder::class);
        $this->call(TaskLinkSeeder::class);
        $this->call(UserGroupSeeder::class);
        $this->call(UserGroupCategorySeeder::class);
        $this->call(UserGroupExperienceSeeder::class);
        $this->call(UserGroupDepartmentSeeder::class);
        $this->call(UserGroupGradeSeeder::class);
        $this->call(UserGroupDesiginationSeeder::class);
       $this->call(UserTableSeeder::class);
       $this->call(EmployeeTableSeeder::class);
    }
}
