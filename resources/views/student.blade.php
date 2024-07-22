@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')

    <h1>Ini Halaman Student</h1>

    <div class="my-5">
        <a href="student-add" class="btn btn-primary">
            Add Data
        </a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <h4>Student list</h4>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NIS</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentlist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->NIS }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/student-detail/{{ $data->id }}">Detail</a>
                            <a class="btn btn-primary" href="/student-edit/{{ $data->id }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

    