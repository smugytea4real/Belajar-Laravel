@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')

    <div class="container">
        <h1>Ini Halaman Home</h1>
        <h4>Selamat datang {{ Auth::user()->name }} Anda adalah seorang {{ Auth::user()->role->name }}</h4>
    </div>
    
@endsection

    