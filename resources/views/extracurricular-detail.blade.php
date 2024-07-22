@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')

    <h2>Anda sedang melihat data detail dari extracurricular {{ $eksul->name }}</h2>

    <div class="mt-5">
        <h3>List Student</h3>
        <ol>
        @foreach ($eksul->students as $item)
            <li>{{$item->name}}</li>
        @endforeach
        </ol>
    </div>
    
@endsection