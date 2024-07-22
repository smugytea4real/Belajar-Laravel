<?php

namespace App\Http\Controllers;


use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();
        return view('teacher', ['teacherlist' => $teacher]);
    }

    public function show($id)
    {
        $teacher = Teacher::with(['class.students'])
        ->findOrFail($id);
        return view('teacher-detail', ['teacher' => $teacher]);
    }

    public function create()
    {    
        $teacher = Teacher::get();
        return view('teacher-add');
    }

    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());

        if($teacher){
            Session::flash('status', 'success');
            Session::flash('message', 'Teacher added successfully');

            return redirect('/teacher');
        }
    }

    public function edit(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($request->id);
        return view('teacher-edit', ['teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($request->id);
        $teacher->update($request->all());

        if($teacher->save()){
            Session::flash('status', 'success');
            Session::flash('message', 'Teacher name updated successfully');
        }

        return redirect('/teacher');
    }
}
