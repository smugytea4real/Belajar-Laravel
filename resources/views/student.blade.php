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
                    <th>Extracurricular</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentlist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->NIS }}</td>
                        <td>{{ $data->class_id }}</td>
                        <td>{{ $data->class->name }}</td>
                        <td>
                        @foreach($data->extracurriculars as $data_extracurricular)
                            - {{ $data_extracurricular->name }} <br>
                        @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

    