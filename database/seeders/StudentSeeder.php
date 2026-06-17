<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_student')->insert([
            ['name' => 'John Doe', 'roll_no' => 20, 'class' => '10'],
            ['name' => 'Jane Smith', 'roll_no' => 22, 'class' => '12'],
            ['name' => 'Alice Johnson', 'roll_no' => 19, 'class' => '11'],
            ['name' => 'Bob Browniiee', 'roll_no' => 21, 'class' => '10'],
        ]);

        Student::factory()->create();
    }
}
