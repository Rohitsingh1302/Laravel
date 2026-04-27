<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function DataDisplay(Request $req){
        // echo $req; method ko call krne pr pura request aa jayega
        // $userdetails[]=$req-input();
        // foreach($userdetails as $data){
        //     echo $data['username']."<br>";
        //     echo $data['passwprd']."<br>"; 
        // }   
         $req->session()->put('all', $req->input());
         echo session('all');
    }
}
 