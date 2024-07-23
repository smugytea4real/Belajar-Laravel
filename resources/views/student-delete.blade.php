@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    
    <div class="mt-5">
        <h2>Anda yakin ingin menghapus data siswa : {{ $student->name }} ({{ $student->NIS }})</h2>
        <form style="display: inline-block" action="/student-destroy/{{ $student->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="/student" class="btn btn-primary">Cancel</a>
    </div>

@endsection

    