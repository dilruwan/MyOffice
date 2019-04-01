<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = date("Y-m-d H:i:s");

        $employees = [
            ['name' => 'Janes Joyce', 'role' => 'Manager', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Miguel De Cervantes', 'role' => 'Software Engineer', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Gertrude Stein', 'role' => 'Business Analyst', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Albert Camus', 'role' => 'Senior Sortware Engineer', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'John Bunyan', 'role' => 'Software Engineer', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Marcel Proust', 'role' => 'Tech Lead', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Valdimir Nabokov', 'role' => 'Software Engineer', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Franz Kafka', 'role' => 'Senior Sortware Engineer', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'James Joyce', 'role' => 'Software Engineer', 'created_at' => $time, 'updated_at' => $time],
            ['name' => 'Umberto Eco', 'role' => 'Senior Sortware Engineer', 'created_at' => $time, 'updated_at' => $time]
        ];

        DB::table('employees')->insert($employees);
    }
}
