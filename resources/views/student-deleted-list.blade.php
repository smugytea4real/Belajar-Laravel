@extends('layout.mainlayout')

@section('title', 'Student Deleted List')

@section('content')
    
    <h1>Ini Halaman student yang sudah di delete</h1>

    <div class="my-5">
        <a href="/student" class="btn btn-primary">Back</a>
    </div>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIS</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->NIS }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/student/{{ $data->id }}/restore">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

    