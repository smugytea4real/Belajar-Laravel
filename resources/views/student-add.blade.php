@extends('layout.mainlayout')

@section('title', 'Add New Student')

@section('content')

   <div class="mt-5 col-6 m-auto">
        <form action="student" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="">-- Select --</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="NIS">NIS</label>
                <input type="text" class="form-control" name="NIS" id="NIS" maxlength="10" required>
            </div>

            <div class="mb-3">
                <label for="class">Class</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="">-- Select --</option>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                @foreach($extracurriculars as $id => $eksul)
                    <label>
                        <input type="checkbox" name="extracurriculars[]" value="{{ $eksul->id }}">
                            {{ $eksul->name }}
                        </label><br>
                @endforeach
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
   </div>

@endsection

    