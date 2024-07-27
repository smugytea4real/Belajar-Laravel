@extends('layout.mainlayout')

@section('title', 'Extracurricular Deleted List')

@section('content')
    <div class="mt-5">
    <h1>Extracurriculars Deleted List</h1>
    </div>

    <div class="my-5">
        <a href="/extracurricular" class="btn btn-primary">Back</a>
    </div>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Extracurricular</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eksul as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="/extracurricular/{{ $data->id }}/restore">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

    