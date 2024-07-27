@extends('layout.mainlayout')

@section('title', 'Add New Teacher')

@section('content')

   <div class="mt-5 col-6 m-auto">
        <form action="teacher" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Teacher name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="mt-4 d-flex gap-2" >
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/teacher" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
   </div>

@endsection

    