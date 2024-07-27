@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')

    <style>
    .no-column {
        width: 50px; /* Adjust the width as needed */
        text-align: center; /* Center align the text */
    }
    </style>

    <div class="mt-5 d-flex">
        <h2>Teacher name : {{ $teacher->name }}</h2>
    </div>

    <div class="mt-5 d-flex">
        <h3>
            Class :
            @if ($teacher->class)
                {{$teacher->class->name}}
            @else
                -
            @endif
        </h3>
    </div>

    <div class="mt-5 d-flex justify-content-center">
        <div class="col-12">
            <table class="table  table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="no-column">No</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($teacher->class)
                        @foreach ($teacher->class->students as $item)
                            <tr>
                                <td class="no-column">{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    
    <a href="/teacher" class="btn btn-primary mb-5">Back</a>
    
@endsection