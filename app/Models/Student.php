<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use hasfactory;
    protected $table = '_student'; // Specify the table name if it doesn't follow Laravel's naming convention
    protected $fillable = ['name', 'roll_no', 'class']; // Specify the fillable attributes for mass assignment
}
