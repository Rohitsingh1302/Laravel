<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students'; // Specify the table name if it doesn't follow Laravel's naming convention

    protected $fillable = ['name', 'age', 'class']; // Specify the fillable attributes for mass assignment
}
