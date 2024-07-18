@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Ini Halaman Home</h1>
        <h4>Hi nama saya {{ $name }}</h4>
        <h4>Saya seorang {{ $status }}</h3>
        
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
            @foreach ($buah as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

    