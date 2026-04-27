<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller //multiple functions ko create krte h yha se.and view ko bhi create krlete hai..and web.php pr call krte h
{    

    public function __construct()  //constructor banaya hai..or middleware laga diya hai
    {
        $this->middleware('age.check'); //middleware call krne ka code, isse yha ke sare functions m middleware apply ho jayega, agar kisi specific function m middleware apply krna h to uske liye constructor m middleware method use krke us function ka naam dena hoga.
    }
    
    function index(){  
        return view('home');
    }
    function user(){
        return "my name is rohit";
    }
    function userdynamic($name, $age){  //dynamically ka code
        return view('userdynamic', compact('name', 'age'));
    }
    function userdetails(Request $req){  //request return krne ka code
        $name = $req->name;
        $age = $req->age;
        return view('userdynamic', compact('name', 'age'));
    } 
    function userdetailview(){
        return view('userdetailview');
    }
}
