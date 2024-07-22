@extends('layout.mainlayout')

@section('title', 'Classroom')

@section('content')

    <h1>Ini Halaman Classroom</h1>

    <div class="my-5">
        <a href="classroom-add" class="btn btn-primary">
            Add Data
        </a>
    </div>

    <h3>Class list</h3>


        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th class="text-center">Action</th>
            </tr>
            @foreach($classlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="classroom-detail/{{ $data->id }}">Detail</a>
                        <a class="btn btn-primary" href="classroom-edit/{{ $data->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>

@endsection
