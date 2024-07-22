@extends('layout.mainlayout')

@section('title', 'Teacher')

@section('content')

    <h1>Ini Halaman Teacher</h1>

    <div class="my-5">
        <a href="/teacher-add" class="btn btn-primary">
            Add Data
        </a>
    </div>

    <h4>Teacher list</h4>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teacherlist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td><a href="teacher-detail/{{ $data->id }}">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection


    