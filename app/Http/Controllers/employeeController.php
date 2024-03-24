<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeeController extends Controller
{
    public function show()
    {
        return view('employee', [
            "tittle" => "employee",
            "data" => Employee::all()
        ]);
    }
}
