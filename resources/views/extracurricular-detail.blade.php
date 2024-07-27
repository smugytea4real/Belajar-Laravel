@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')

    <style>
    .no-column {
        width: 50px; /* Adjust the width as needed */
        text-align: center; /* Center align the text */
    }
    </style>

    <div class="mt-5">
        <h2>Extracurricular Detail</h2>
    </div>
    
    <h4>{{ $eksul->name }}</h4>
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
                        @foreach ($eksul->students as $item)
                            <tr>
                                <td class="no-column">{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <a href="/extracurricular" class="mt-5 btn btn-primary">Back</a>
    
@endsection