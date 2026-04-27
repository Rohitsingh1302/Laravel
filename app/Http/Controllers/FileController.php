<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function uploadData(Request $req){
        $path = $req->file('file')->store('uploads', 'public');
        echo "file uploaded successfully. Path: " . $path;
    }
}
