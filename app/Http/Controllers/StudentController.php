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

        $nilai = [4,1,2,3,6,5,7,9,8,3,5,3,1,2,6,8,3];

        // php biasa
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRataRata = $totalNilai / $countNilai;


        // colection avg
        // $nilaiRataRata = collect($nilai)->avg();
        // dd($nilaiRataRata);

        // colection diff
        // $restaurantA = ['martabak', 'bakso', 'soto', 'nasi'];
        // $restaurantB = ['cendol', 'bakso', 'esteh', 'kari'];

        // $menuRestoA = collect($restaurantA)->diff($restaurantB);
        // $menuRestoB = collect($restaurantB)->diff($restaurantA);

        // dd($menuRestoA);

        // colection filter
        // $aaa = collect($nilai)->filter(function ($value) {
        //     return $value > 4;
        // })->all();
    
        // dd($aaa);

       
        // $biodata = [
        //     ['nama' => 'beni', 'umur' => 20],
        //     ['nama' => 'siti', 'umur' => 21],
        //     ['nama' => 'buda', 'umur' => 22],
        // ];

        // $aaa = collect($biodata)->pluck('nama');

        // dd($aaa);

        // mencari tahu hasil dari nilai dikali 2 dari data2 yang ada di array $nilai
        // $nilaiKaliDua = [];
        // foreach ($nilai as $value) {
        //     array_push($nilaiKaliDua, $value * 2);
        // }

        // dd($nilaiKaliDua);

        // colection pluck

        $aaa = collect($nilai)->map(function ($value) {
             return $value * 2;
        });

        dd($aaa);
    }
}
