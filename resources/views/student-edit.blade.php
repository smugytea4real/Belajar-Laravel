@extends('layout.mainlayout')

@section('title', 'Edit Student')

@section('content')

   <div class="mt-5 col-6 m-auto">

    <div class="mt-5 col-6 m-auto">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        
        <form action="/student/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}" required>
            </div>

            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="{{ $student->gender }}">{{ $student->gender }}</option>
                    @if ($student->gender == 'L')
                        <option value="P">P</option>
                    @else
                        <option value="L">L</option>
                    @endif
                </select>
            </div>

            <div class="mb-3">
                <label for="NIS">NIS</label>
                <input type="text" class="form-control" name="NIS" id="NIS" value="{{ $student->NIS }}" maxlength="10" required>
            </div>

            <div class="mb-3">
                <label for="class">Class</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="{{ $student->class_id }}">{{ $student->class->name }}</option>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                @foreach($extracurriculars as $eksul)
                    <div>
                        <input type="checkbox" name="extracurriculars[]" id="eksul-{{ $eksul->id }}" value="{{ $eksul->id }}"
                            @if (in_array($eksul->id, $studentExtracurriculars)) checked @endif>
                        <label for="eksul-{{ $eksul->id }}">
                            {{ $eksul->name }}
                        </label><br>
                    </div>
                @endforeach
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
   </div>

@endsection

    