@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')

    <div class="container">
        <h1>Ini Halaman Home</h1>
        <h4>Hi nama saya {{ $name }}</h4>
        <h4>Saya seorang {{ $status }}</h3>
    </div>
    
@endsection

    