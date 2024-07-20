@extends('layout.mainlayout')

@section('title', 'Class')

@section('content')
    <div class="container">
        <h1>Ini Halaman Class</h1>
        <h3>Class list</h3>


        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Student</th>
                <th>Teacher</th>
            </tr>
            @foreach($classlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach($data->students as $data_student)
                            -{{ $data_student->name }} <br>
                        @endforeach
                    </td>
                    <td>
                        {{ $data->homeroomTeacher->name }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
