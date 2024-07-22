@extends('layout.mainlayout')

@section('title', 'Add New Extracurricular')

@section('content')

   <div class="mt-5 col-6 m-auto">
        <form action="extracurricular" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
   </div>

@endsection

    