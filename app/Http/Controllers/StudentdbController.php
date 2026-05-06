<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
class StudentdbController extends Controller
{
    //add record ke 3 method hote hai, DB facade method, model method, factory method
    public function Addstudents (){
        // DB::table('_student')->insert([
        //     'name' => 'John Doe',
        //     'roll_no' => 20,
        //     'class' => '10',
        // ]);   //DB facade method

        // DB::insert("INSERT INTO _student (name, roll_no, class) VALUES ('John Doe', 20, '10')"); //raw query method
        // return "records added successfully";

        Student::create([
            'name' => 'Bob Brown',
            'roll_no' => 21,
            'class' => '10',
        ]);    //,model method 
        return "records added successfully";
    }


    //update record
    public function Updatestudents (){
        DB::table('_student')->where('id',1)->update([
            'name' => 'John Doe Updated',
            'roll_no' => 20,
            'class' => '10',
        ]);   //DB facade method
        return "records updated successfully";

        // DB::update("UPDATE _student SET name = 'John Doe Updated again', roll_no = 20, class = '10' WHERE id = 1"); //raw query method
        // return "records updated successfully";
        
        // Student::find(8)->update([
        //     'name' => 'Bob Brown Updated',
        //     'roll_no' => 21,  
        //     'class' => '10',
        // ]);    //,model method
        // return "records updated successfully";
    }   

    public function Deletestudents (){
        DB::table('_student')->where('id', 4)->delete();   //DB facade method
        return "records deleted successfully";

        // Student::find(4)->delete();    //,model method
        // return "records deleted successfully";
    }

    public function Showstudents (){
        $students = DB::table('_student')->get();   //DB facade method
        return $students;

        // $students = Student::all();    //model method
        // return $students;
    }

}
