@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')

    <h1>Ini Halaman Extracurricular</h1>

    <div class="my-5">
        <a href="extracurricular-add" class="btn btn-primary">
            Add Data
        </a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <h4>Extracurricular list</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eksullist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="extracurricular-detail/{{ $data->id }}">Detail</a>
                            <a class="btn btn-primary" href="extracurricular-edit/{{ $data->id }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection

    