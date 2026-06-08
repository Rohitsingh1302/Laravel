<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('employees')->insert([
                'emp_id' => 'EMP' . $i,
                'name' => 'Employee ' . $i,
                'email' => 'emp'.$i.'@gmail.com',
                'salary' => rand(30000, 80000),
                'joining_date' => now()
            ]);
        }
    }
}
