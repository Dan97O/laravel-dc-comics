@extends('layouts.app')

@section('content')
    @foreach ($comics as $comic)
        <img src="{{ $comic->thumb }}" alt="">
    @endforeach
@endsection
