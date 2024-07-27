@extends('layout.mainlayout')

@section('title', 'Teacher')

@section('content')
    
    <div class="mt-5">
        <h2>Are you sure you want to delete this Teacher's data?</h2>
        <div class="mt-5">
            <h4>Teacher name : {{ $teacher->name }}</h4>
            <h4> Class :
                @if ($teacher->class)
                {{$teacher->class->name}}
                @else
                    -
                @endif
            </h4>
        </div>
        <div class="mt-5 d-flex gap-3">
            <form style="display: inline-block" action="/teacher-destroy/{{ $teacher->id }}" method="post">
                @csrf
                @method('delete')
                <div class="d-flex gap-4">
                    <button type="submit" class="btn btn-danger ">Delete</button>
                    <a href="/teacher" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection

    