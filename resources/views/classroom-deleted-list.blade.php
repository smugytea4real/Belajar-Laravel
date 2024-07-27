@extends('layout.mainlayout')

@section('title', 'Classroom Deleted List')

@section('content')
    
    <div class="mt-5">
    <h1>Classroom Deleted List</h1>
    </div>

    <div class="my-5">
        <a href="/classroom" class="btn btn-primary">Back</a>
    </div>
    

    <h3>Class list</h3>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Classroom</th>
                <th class="text-center">Action</th>
            </tr>
            <tbody>
                @foreach($class as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/classroom/{{ $data->id }}/restore">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection

    