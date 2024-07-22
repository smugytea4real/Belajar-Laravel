@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')

    <h2>Anda sedang melihat data detail dari Teacher yang bernama {{ $teacher->name }}</h2>

    <div class="mt-5">
        <h3>
            Class :
            @if ($teacher->class)
                {{$teacher->class->name}}
            @else
                -
            @endif
        </h3>
    </div>

    <div class="mt-5">
        <h4>List Student</h4>
        <ol>
            @if ($teacher->class)
                @foreach ($teacher->class->students as $item)
                    <li>{{$item->name}}</li>
                @endforeach
            @endif
        </ol>
    </div>

    
@endsection