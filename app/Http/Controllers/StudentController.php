<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
            //     $student = Student::all();
            //     return view('student', ['studentlist' => $student]);

            //     query builder
            //     $student = DB::table('students')->get();
            //     dd($student);
            
            //     query builder
            //     $student = DB::table('students')->insert([
            //     'name' => 'Donny',
            //     'gender' => 'L',
            //     'NIS' => '1234567',
            //     'class_id' => 1
            //     ]);

            //     query builder
            //     $student = DB::table('students')->where('gender', 'P')->get();
            //     dd($student);

            //     query builder
            //     DB::table('students')->where('id', 32)->update([
            //     'name' => 'Sonny',
            //     'class_id' => 2
            //     ]);

            //     query builder
            //     DB::table('students')->where('id', 32)->delete();

            //     eloquent
            //     $student = Student::all();
            //     dd($student);

            //     eloquent
            //     Student::create([
            //        'name' => 'Denny',
            //        'gender' => 'P',
            //        'NIS' => '7654321',
            //        'class_id' => 2
            //     ]);

            //     eloquent
            //     Student::find(32)->update([
            //     'name' => 'Tony',
            //     'gender' => 'P',
            //     ]);

            //     eloquent
            //     Student::find(31)->delete();
    }
}
