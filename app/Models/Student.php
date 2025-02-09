<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];


    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, "student_teachers");
    }
}
