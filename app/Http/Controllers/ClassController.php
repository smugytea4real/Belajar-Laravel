<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::get();
        return view('classroom', ['classlist' => $class]);
    }

    public function show($id)
    {
        $class = ClassRoom::with(['homeroomTeacher', 'students'])
        ->findOrFail($id);
        return view('classroom-detail',['class' => $class]);
    }

    public function create()
    {    
        $teacher = Teacher::select('id', 'name')->get();
        return view('classroom-add', ['teacher' => $teacher]);
    }

    public function store(Request $request)
    {
        $classroom = ClassRoom::create($request->all());
        return redirect('/classroom');
    }

    public function edit(Request $request, $id)
    {
        $class = ClassRoom::findOrFail($request->id);
        $teacher = Teacher::where('id', '!=', $class->id)->select('id', 'name')->get();
        return view('classroom-edit', ['class' => $class, 'teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $class = ClassRoom::findOrFail($request->id);
        $class->update($request->all());
        return redirect('/class');
    }
}
