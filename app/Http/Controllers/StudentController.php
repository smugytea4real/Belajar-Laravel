<?php

namespace App\Http\Controllers;


use App\Models\ClassRoom;
use App\Models\Extracurricular;
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
        $student = Student::get();
        return view('student', ['studentlist' => $student]);
        
    }

    public function show($id)
    {
        $student = Student::with([ 'class.homeroomTeacher', 'extracurriculars' ])
        ->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create()
    {    
        $class = ClassRoom::select('id', 'name')->get();
        $extracurriculars = Extracurricular::select('id', 'name')->get();
        return view('student-add', ['class' => $class, 'extracurriculars' => $extracurriculars]);
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        $student->extracurriculars()->sync($request->input('extracurriculars', []));
        return redirect('/student');
    }
}