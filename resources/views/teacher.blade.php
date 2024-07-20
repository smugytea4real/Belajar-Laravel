@extends('layout.mainlayout')

@section('title', 'Teacher')

@section('content')
    <div class="container">
        <h1>Ini Halaman Teacher</h1>
        <h4>Teacher list</h4>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teacherlist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

    