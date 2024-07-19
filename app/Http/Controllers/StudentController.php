<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // lazy loading
        // $student = Student::all();

        // eager loading
        $student = Student::with('class')->get();
        return view('student', ['studentlist' => $student]);
    }
}