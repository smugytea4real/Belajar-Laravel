@extends('layout.mainlayout')

@section('title', 'Edit Teacher')

@section('content')

   <div class="mt-5 col-6 m-auto">
        <form action="/teacher/{{ $teacher->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Class Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $teacher->name }}" required>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
   </div>

@endsection

    