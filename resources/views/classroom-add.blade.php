@extends('layout.mainlayout')

@section('title', 'Add New Class')

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

        <form action="classroom" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="mb-3">
                <label for="class">Teacher</label>
                <select name="teacher_id" id="teacher" class="form-control" required>
                    <option value="">-- Select --</option>
                    <option value="{{ null }}">Empty</option>
                    @foreach ($teacher as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
   </div>

@endsection

    