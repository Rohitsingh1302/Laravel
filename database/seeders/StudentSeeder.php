<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_student')->insert([
            'name' => 'John Doe',
            'roll_no' => 20,
            'class' => '10',
        ]);

        DB::table('_student')->insert([
            'name' => 'Jane Smith',
            'roll_no' => 22,
            'class' => '12',
        ]);
        DB::table('_student')->insert([
            'name' => 'Alice Johnson',
            'roll_no' => 19,
            'class' => '11',
        ]);
        // _student::create([
        //     'name' => 'Bob Brown',
        //     'roll_no' => 21,
        //     'class' => '10',
        // ]);     MODEL WALAMETHOD HAI YEH,,,SEEKHNA HAI MAM SE

    }
}
