<?php

namespace App\Providers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $teachers = Teacher::all();
        $students = Student::all();

        view()->share([
            "teachers"=> $teachers,
            "students"=> $students,
        ]);
    }
}
