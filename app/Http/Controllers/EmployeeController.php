<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function insert(Request $request)
    {
        if ($request->isMethod('post')) {
            DB::table('employees')->insert([
                'emp_id' => $request->emp_id,
                'name' => $request->name,
                'email' => $request->email,
                'salary' => $request->salary,
                'joining_date' => $request->joining_date
            ]);
            return "Employee Added Successfully!";
        }
        return view('employee.insert_form');
    }
    public function show()
    {
        return DB::table('employees')->get();
    }
    public function update($id)
    {
        DB::table('employees')
            ->where('id', $id)
            ->update([
                'salary' => 70000
            ]);
        return "Employee Updated";
    }
    public function delete($id)
    {
        DB::table('employees')
            ->where('id', $id)
            ->delete();
        return "Employee Deleted";
    }
    //Salary>50000 and Total Count
    public function highSalary()
    {
        $employees = DB::table('employees')
            ->where('salary', '>', 50000)
            ->get();
        $count = $employees->count();
        return response()->json([
            'employees' => $employees,
            'total' => $count
        ]);
    }
}
