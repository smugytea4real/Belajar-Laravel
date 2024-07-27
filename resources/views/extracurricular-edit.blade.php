@extends('layout.mainlayout')

@section('title', 'Edit Extracurricular')

@section('content')

   <div class="mt-5 col-6 m-auto">
        <form action="/extracurricular/{{ $extracurricular->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Extracurricular Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $extracurricular->name }}" required>
            </div>

            <div class="mt-5 d-flex gap-4">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/extracurricular" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
   </div>

@endsection

    