@extends('layouts.app')


@section('content')
    <div class="container">
        <img src="{{ $comics->thumb }}" alt="{{ $comics->title }}" class="img-fluid">
        <h1>{{ $comics->title }}</h1>
        <span>{{ $comics->price }}</span>
        <span>{{ $comics->description }}</span>
    </div>
@endsection
