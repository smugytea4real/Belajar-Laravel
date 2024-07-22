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
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentlist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->NIS }}</td>
                        <td><a href="/student/{{ $data->id }}">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection

    