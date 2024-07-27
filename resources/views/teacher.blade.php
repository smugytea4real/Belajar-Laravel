@extends('layout.mainlayout')

@section('title', 'Teacher')

@section('content')

    <div class="mt-5 d-flex">
        <h1>Teacher Page</h1>
    </div>

    <div class="my-5 d-flex justify-content-between">
        @if (Auth::user()->role_id == 1)
            <a href="teacher-add" class="btn btn-primary">Add Data</a>  
            <a href="teacher-deleted-list" class="btn btn-info">Show Deleted Data</a>   
        @endif
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Classroom</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teacherlist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>
                            @if ($data->class)
                            {{$data->class->name}}
                            @else
                            -
                            @endif
                        </td>
                        <td class="text-center">
                            @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                                -
                            @else 
                                <a class="btn btn-primary" href="teacher-detail/{{ $data->id }}">Detail</a>
                            @endif
                                
                            @if (Auth::user()->role_id == 1)
                                <a class="btn btn-primary" href="teacher-edit/{{ $data->id }}">Edit</a>
                                <a class="btn btn-danger" href="teacher-delete/{{ $data->id }}">Delete</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


    