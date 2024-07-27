@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')
    
    <div class="mt-5">
        <div class="mt-5">
        <h2>Are you sure you want to delete this Extracurricular data?</h2>
        <div class="mt-5">
            <h4>Extracurricular name : {{ $eksul->name }}</h4>
        </div>
        <form style="display: inline-block" action="/extracurricular-destroy/{{ $eksul->id }}" method="post">
            @csrf
            @method('delete')
            <div class="mt-5 d-flex gap-4">
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="/extracurricular" class="btn btn-primary">Cancel</a>
            </div>
        </form>
    </div>

@endsection

    