@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col d-flex justify-content-center">
                <div class="card text-center w-50 shadow">
                    <div class="card-img-top">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                        <p class="card-text">Series: {{ $comic->series }}</p>
                        <p class="card-text">Sale Date: {{ $comic->sale_date }}</p>
                        <p class="card-text">Type: {{ $comic->type }}</p>
                        <p class="card-text">Price: {{ $comic->price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
