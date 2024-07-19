@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    <div class="container">
        <h1>Ini Halaman Student</h1>
        <h4>Student list</h4>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NIS</th>
                    <th>Class id</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentlist as $data_student) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data_student->name }}</td>
                        <td>{{ $data_student->gender }}</td>
                        <td>{{ $data_student->NIS }}</td>
                        <td>{{ $data_student->class_id }}</td>
                        <td>{{ $data_student->class->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

    