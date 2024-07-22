@extends('layout.mainlayout')

@section('title', 'Edit Classroom')

@section('content')

   <div class="mt-5 col-6 m-auto">
        <form action="/classroom/{{ $class->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Class Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $class->name }}" required>
            </div>

            <div class="mb-3">
                <label for="teacher">Teacher</label>
                <select name="teacher" id="teacher" class="form-control" required>
                    <option value="{{ $class->teacher_id }}">{{ $class->homeroomTeacher->name }}</option>
                    @foreach ($teacher as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
   </div>

@endsection

    