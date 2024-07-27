@extends('layout.mainlayout')

@section('title', 'Class')

@section('content')

    <style>
    .no-column {
        width: 50px; /* Adjust the width as needed */
        text-align: center; /* Center align the text */
    }
    </style>

    <div class="mt-5">
        <h2>Classroom Detail</h2>
        <h4>{{ $class->name }}</h4>
    </div>

    <div class="mt-5 d-flex">
        <h4><strong>Homeroom Teacher : </strong>
            @if($class->homeroomTeacher && $class->homeroomTeacher->name)
                {{ $class->homeroomTeacher->name }}
            @else
                empty
            @endif
        </h4>
    </div>

    <div class="float-end">
        <a href="/classroom" class="btn btn-primary">Back</a>    
    </div>

    <div class="mt-5 d-flex justify-content-center">
        <div class="col-12">
            <table class="table  table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="no-column">No</th>
                        <th>Student name</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($class->students as $item)
                            <tr>
                                <td class="no-column">{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

@endsection
