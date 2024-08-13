@extends('template')
@section('main')
    <h1>Ini View Laravel</h1>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h2>ini perulangan menggunakan blade</h2>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp

    <img src="{{ asset('img/react.jpg') }}" width="300" alt="">
@endsection
