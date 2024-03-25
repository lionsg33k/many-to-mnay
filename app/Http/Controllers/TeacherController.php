<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //

    public function store(Request $request)
    {

        request()->validate([
            "name" => "required"
        ]);

        Teacher::create([
            "name" => $request->name
        ]);
        return back();
    }
}
