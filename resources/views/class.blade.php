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
            </tr>
            @foreach($classlist as $data_class)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data_class->name }}</td>
                    <td>
                        @foreach($data_class->students as $data_student)
                            -{{ $data_student->name }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
