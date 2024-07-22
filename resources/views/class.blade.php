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
                <th>Action</th>
            </tr>
            @foreach($classlist as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td><a href="class-detail/{{ $data->id }}">Detail</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    
@endsection
