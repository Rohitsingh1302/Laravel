<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentForm1 extends Controller
{
    public function StudentForm(request $req){
        $req->validate([
            'name' => "required' | min:3 | max:20",
            'roll' => 'required|numeric',
            'email' => 'required|email'
        ]); 
        return "submitted successfully";
    }
}
