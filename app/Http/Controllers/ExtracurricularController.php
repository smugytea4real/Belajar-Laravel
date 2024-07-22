<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $eksul = Extracurricular::get();
        return view('extracurricular', ['eksullist' => $eksul]);
    }

    public function show($id)
    {
        $eksul = Extracurricular::findOrFail($id);
        return view('extracurricular-detail', ['eksul' => $eksul]);
    }
}
