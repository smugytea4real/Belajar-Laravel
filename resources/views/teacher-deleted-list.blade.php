@extends('layout.mainlayout')

@section('title', 'Teacher Deleted List')

@section('content')
    
    <div class="mt-5 d-flex">
        <h1>Teachers Deleted List</h1>
    </div>

    <div class="my-5">
        <a href="/teacher" class="btn btn-primary">Back</a>
    </div>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Class Room</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teacher as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        @if ($data->class)
                        <td>{{$data->class->name}}</td>
                        @else
                        <td> - </td> 
                        @endif
                        <td class="text-center">
                            <a class="btn btn-primary" href="/teacher/{{ $data->id }}/restore">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

    