@extends('layout.mainlayout')

@section('title', 'Classroom Delete')

@section('content')
    
    <div class="mt-5">
        <h2>Anda yakin ingin menghapus data classroom : {{ $class->name }} </h2>
        <form style="display: inline-block" action="/classroom-destroy/{{ $class->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="/classroom" class="btn btn-primary">Cancel</a>
    </div>

@endsection

    