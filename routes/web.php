<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;



Route::get("/", [TestController::class, "index"]);

Route::post("teacher/store" , [TeacherController::class , "store"])->name("teacher.store");
Route::post("student/store" , [StudentController::class , "store"])->name("student.store");



