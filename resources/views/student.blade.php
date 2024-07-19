@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    <div class="container">
        <h1>Ini Halaman Student</h1>
        <h4>Student list</h4>
        <ol>
            @foreach($studentlist as $data_student)
                <li>{{ $data_student->name }} | {{ $data_student->class_id }} | {{ $data_student->NIS}}
                </li>
            @endforeach
        </ol>
    </div>
@endsection

    