@extends('layout.mainlayout')

@section('title', 'Extracurricular')

@section('content')
    <div class="container">
        <h1>Ini Halaman Extracurricular</h1>
        <h4>Extracurricular list</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Anggota</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eksullist as $data) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>
                            @foreach ($data->students as $data_student)
                                - {{ $data_student->name }} <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

    