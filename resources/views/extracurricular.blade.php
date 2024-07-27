@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')

    <div class="mt-5 d-flex">
    <h1>Extracurricular Page</h1>
    </div>

    <div class="my-5 d-flex justify-content-between">
        @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                            
        @else 
            <a href="extracurricular-add" class="btn btn-primary">Add Data</a>   
        @endif

        @if (Auth::user()->role_id == 1)
            <a href="extracurricular-deleted-list" class="btn btn-info">Show Deleted Data</a>   
        @endif
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <h4>Extracurriculars list</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Exxtracurricular name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eksullist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td class="text-center">
                        @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                            <a class="btn btn-primary" href="extracurricular-detail/{{ $data->id }}">Detail</a>
                        @else 
                            <a class="btn btn-primary" href="extracurricular-detail/{{ $data->id }}">Detail</a>
                            <a class="btn btn-primary" href="extracurricular-edit/{{ $data->id }}">Edit</a>
                        @endif
                        @if (Auth::user()->role_id == 1)
                            <a class="btn btn-danger" href="extracurricular-delete/{{ $data->id }}">Delete</a>
                        @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection

    