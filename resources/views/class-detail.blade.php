@extends('layout.mainlayout')

@section('title', 'Class')

@section('content')
    <h2>Anda sedang melihat data detail dari class {{ $class->name }}</h2>

    <div class="mt-5">
        <h3><strong>Homeroom Teacher : </strong>{{ $class->homeroomTeacher->name }}</h3>
    </div>

    <div class="mt-5">
        <h4>List Student</h4>
        <ol>
        @foreach ($class->students as $item)
            <li>{{$item->name}}</li>
        @endforeach
        </ol>
    </div>

@endsection
