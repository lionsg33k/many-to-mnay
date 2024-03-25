<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function store(Request $request)
    {
        request()->validate([
            "name" => "required",
            "teachers" => "required|array"
        ]);

        $student =   Student::create([
            "name" => $request->name
        ]);

        $student->teachers()->attach($request->teachers);

        return back();
    }
}
