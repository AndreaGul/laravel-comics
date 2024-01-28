@extends('layouts.main')

@section('main')
    main
    @foreach ( $comics as $comic)
        {{ $comic['title'] }}
    @endforeach
    <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="">
@endsection