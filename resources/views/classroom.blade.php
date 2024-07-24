@extends('layout.mainlayout')

@section('title', 'Classroom')

@section('content')

    <div class="mt-5 d-flex">
        <h1>Ini Halaman Classroom</h1>
    </div>

    <div class="my-5 d-flex justify-content-between">        
        @if (Auth::user()->role_id == 1)
        <a href="classroom-add" class="btn btn-primary">Add Data</a>
        <a href="classroom-deleted-list" class="btn btn-info">Show Deleted Data</a>              
        @else 
        
        @endif   
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

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
                        @if (Auth::user()->role_id == 1)
                        <a class="btn btn-primary" href="classroom-edit/{{ $data->id }}">Edit</a>
                        <a class="btn btn-danger" href="classroom-delete/{{ $data->id }}">Delete</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>

@endsection
