<?php

namespace App\Http\Controllers;


use App\Http\Requests\StudentCreateRequest;
use App\Http\Requests\StudentEditRequest;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function store(StudentCreateRequest $request)
    {   
        $student = Student::create($request->all());
        $student->extracurriculars()->sync($request->input('extracurriculars', []));

        if($student){
            Session::flash('status', 'success');
            Session::flash('message', 'Student added successfully');
        }

        return redirect('student');
    }

    public function edit(Req $request, $id)
    {
        $student = Student::findOrFail($request->id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->select('id', 'name')->get();
        $extracurriculars = Extracurricular::where('id', '!=', $student->id)->select('id', 'name')->get();
        $studentExtracurriculars = $student->extracurriculars()->pluck('id')->toArray();
        return view('student-edit', [
            'student' => $student, 
            'class' => $class, 
            'extracurriculars' => $extracurriculars, 
            'studentExtracurriculars' => $studentExtracurriculars
        ]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($request->id);
        $student->update($request->all());
        $student->extracurriculars()->sync($request->input('extracurriculars', []));

        if($student->save()){
            Session::flash('status', 'success');
            Session::flash('message', 'Student updated successfully');
        }

        return redirect('student');
    }
}