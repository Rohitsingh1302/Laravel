<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ClothesController extends Controller
{
     public $clothes = [
        1 => ["name" => "T-Shirt", "price" => 500, "desc" => "Cotton T-Shirt."],
        2 => ["name" => "Jeans", "price" => 1200, "desc" => "Blue jeans."],
        3 => ["name" => "Jacket", "price" => 3000, "desc" => "Leather jacket with zip closure."],
        4 => ["name" => "Sweater", "price" => 800, "desc" => "Woolen sweater."],
        5 => ["name" => "Dress", "price" => 1500, "desc" => "Stylish dress."],
    ];
    public function index()
    {
        return view('clothes', ['clothes' => $this->clothes]);
    }
    public function show($id)
    {
        $item = $this->clothes[$id];
        return view('item', compact('item'));
    }
}

