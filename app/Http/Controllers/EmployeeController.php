<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee= Employee::all();
        return view('pages.employee.index',compact('employee'));  // Ensure the path matches the view file location
    }
}
