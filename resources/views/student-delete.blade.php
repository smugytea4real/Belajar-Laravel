@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    
    <div class="mt-5">
        <h2>Anda yakin ingin menghapus data siswa : {{ $student->name }} ({{ $student->NIS }})</h2>
        <form style="display: inline-block" action="/student-destroy/{{ $student->id }}" method="post">
            @csrf
            @method('delete')
            <div class="d-flex gap-4">
                <button type="submit" class="btn btn-danger ">Delete</button>
                <a href="/student" class="btn btn-primary">Cancel</a>
            </div>
        </form>
    </div>
    
@endsection

    