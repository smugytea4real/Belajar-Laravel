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
}
