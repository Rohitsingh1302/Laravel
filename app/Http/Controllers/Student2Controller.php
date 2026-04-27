<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student2Controller extends Controller
{
    function Studentattendance(){
        return view('STUDENT.studentattendance');
    }
    
    function Studentfee(){
        return view('STUDENT.studentfee');
    }

    function Studentmark(){
        return view('STUDENT.studentmark');
    }

    
}
