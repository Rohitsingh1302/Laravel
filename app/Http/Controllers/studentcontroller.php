<?php
namespace App\Http\Controllers;

class studentcontroller extends Controller
{
    function Studentdetails($id){
        if(!ctype_digit($id)){
            return "only integers are allowed";
        } //digit should be  between 1 to 5 only
        if($id>5 || $id<1){
            return "id must be between 1 to 5";
        } //suppose 3 type kra tou 3rd student ka details show krni hai. i have to compare both the ids and then show the details of that student. so i have to create an array of students and then compare the id with the array key and then show the details of that student.
        $students = [
            1 => ['name' => 'rohit', 'age' => 21, 'class' => 'k23BA'],
            2 => ['name' => 'sachin', 'age' => 22, 'class' => 'k23BA'],
            3 => ['name' => 'virat', 'age' => 23, 'class' => 'k23BA'],
            4 => ['name' => 'dhoni', 'age' => 24, 'class' => 'k23BA'],
            5 => ['name' => 'yuvraj', 'age' => 25, 'class' => 'k23BA'],
        ];
        if(array_key_exists($id, $students)){
            $student = $students[$id];
            return view('studentdetails', compact('student'));
        }else{  
            return "student not found";
        }
    }
//i want to make the revrrse of the number table,12 to 21.
    function Table($num){
        $ans=0;
        while($num>0){
            $rem = $num % 10; //last digit nikalne ke liye
            $ans = $ans * 10 + $rem; //reverse number bnane ke liye, pehle ans ko 10 se multiply krna hoga aur phir rem ko
            $num = (int)($num / 10); //last digit ko remove krne ke liye, num ko 10 se divide krna hoga aur phir usko integer me convert krna hoga, taki decimal point na aaye.
        }
        return view ('Table', ['num'=>$ans]); //table view call krna hoga, aur usme ans variable ko access krna hoga, uske liye compact function use krna hoga, compact function m ans variable ka naam dena hoga, taki usko view m access kr skte hai.
    }

}
