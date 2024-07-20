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
        // lebih banyak request ke database

        // eager loading => lebih cepat => hanya melakukan 2 kali request ke database
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->get();
        return view('student', ['studentlist' => $student]);
        
    }
}