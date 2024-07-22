@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')

    <div class="container">
        <h1>Ini Halaman Extracurricular</h1>
        <h4>Extracurricular list</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eksullist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td><a href="extracurricular-detail/{{ $data->id }}">Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

    