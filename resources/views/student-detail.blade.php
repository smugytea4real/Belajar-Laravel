@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    
    <h2>Anda sedang melihat data detail dari siswa {{ $student->name }}</h2>
    <div class="mt-5 mb-5">
        <table class="table table-bordered">
            <tr>
                <th>NIS</th>
                <th>Gender</th>
                <th>Class</th>
                <th>Homeroom Teacher</th>
            </tr>
            <tr>
                <td>{{ $student->NIS }}</td>
                <td>
                    @if($student->gender == 'L')
                        Laki-laki
                    @else
                        Perempuan
                    @endif
                </td>
                <td>{{ $student->class->name }}</td>
                <td>{{ $student->class->homeroomTeacher->name }}</td>
            </tr>
        </table>
    </div>

    <div>
        <h3>List Extracurriculars</h3>
        <ol>
        @foreach ($student->extracurriculars as $item)
            <li>{{$item->name}}</li>
        @endforeach
        </ol>
    </div>
    
    <style>
        th{
           width: 25%; 
        }
    </style>

@endsection

    