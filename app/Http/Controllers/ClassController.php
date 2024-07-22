<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::get();
        return view('class', ['classlist' => $class]);
    }

    public function show($id)
    {
        $class = ClassRoom::with(['homeroomTeacher', 'students'])
        ->findOrFail($id);
        return view('class-detail',['class' => $class]);
    }
}
