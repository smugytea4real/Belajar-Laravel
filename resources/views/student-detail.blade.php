@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    
    <div class="mt-5">
    <h2>Student Detail</h2>
    </div>

    <div class="my-3 d-flex justify-content-center">
        @if ($student->image != '') 
            <img src="{{ asset('storage/photo/'.$student->image) }}" alt="" width="200px">
        @else
            <img src="{{ asset('storage/images/profilepic.jpg') }}" alt="" width="200px">
        @endif
    </div>

    <div class="mt-5 mb-5">
        <table class="table table-bordered">
            <tr>
                <th class="col-2">Name</th>
                <th class="col-2">Gender</th>
                @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                            
                @else 
                    <th class="col-2">NIS</th>
                @endif
                <th class="col-2">Classroom</th>
                <th class="col-2">Teacher</th>
            </tr>
            <tr>
                <td class="col-2">{{ $student->name }}</td>
                <td class="col-2">
                    @if($student->gender == 'L')
                        Laki-laki
                    @else
                        Perempuan
                    @endif
                </td>
                    @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                                
                    @else 
                        <td class="col-2">{{ $student->NIS }}</td>
                    @endif
                <td class="col-2">{{ $student->class->name }}</td>
                <td class="col-2">{{ $student->class->homeroomTeacher->name }}</td>
            </tr>
        </table>
    </div>

    <div>
        <h3>List Extracurriculars</h3>
        <ol>
        @foreach ($student->extracurriculars as $item)
            <li>{{$item->name}}</li>
        @endforeach
        </ol>
    </div>
    
    <a href="/student" class="btn btn-primary">Back</a>
@endsection

    