@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')

    <div class="mt-5 d-flex">
        <h1>Student Page</h1>
    </div>

    <div class="my-5 d-flex justify-content-between">
        @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                            
        @else 
            <a href="student-add" class="btn btn-primary">Add Data</a>   
        @endif

        @if (Auth::user()->role_id == 1)
            <a href="student-deleted-list" class="btn btn-info">Show Deleted Data</a>   
        @endif
    </div>

    @if (Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="my-3 col-12 col-sm-8 col-md-5">
        <form action="" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Keyword">
                <button class="input-group-text btn btn-primary">Search</button>
            </div>
        </form>
    </div>
        

    
    <div class="mt-5">
        <h4>Studen list</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Classroom</th>
                    @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                        
                    @else 
                        <th>NIS</th>
                    @endif
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentlist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->class->name }}</td>
                        @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                        
                        @else 
                        <td>{{ $data->NIS }}</td>
                        @endif
                        <td class="text-center">
                            @if (Auth::user()->role_id == 3)
                                <a class="btn btn-primary" href="/student-detail/{{ $data->id }}">Detail</a>
                            @endif
                            @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                            
                            @else 
                                <a class="btn btn-primary" href="/student-detail/{{ $data->id }}">Detail</a>
                                <a class="btn btn-primary" href="/student-edit/{{ $data->id }}">Edit</a>
                            @endif
                                
                            @if (Auth::user()->role_id == 1)
                                <a class="btn btn-danger" href="/student-delete/{{ $data->id }}">Delete</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    

    <div class="my-5">
        {{ $studentlist->withQueryString()->links() }}
    </div>
@endsection

    