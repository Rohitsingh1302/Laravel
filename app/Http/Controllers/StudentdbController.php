<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
class StudentdbController extends Controller
{
    public function Addstudents (){
        // DB::table('_student')->insert([
        //     'name' => 'John Doe',
        //     'roll_no' => 20,
        //     'class' => '10',
        // ]);   //DB facade method

        Student::create([
            'name' => 'Bob Brown',
            'roll_no' => 21,
            'class' => '10',
        ]);    //,model method 
        return "records added successfully";
    }
}
