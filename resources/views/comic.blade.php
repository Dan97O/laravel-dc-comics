@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @forelse ($comics as $comic)
                <div class="col d-flex">
                    <div class="card my-3 p-3">
                        <img class="card-img-top" src="{{ $comic->thumb }}" alt=" {{ $comic->title }}">
                        <div class="card-body">
                            <h4 class="card-title">
                                {{ $comic->title }}
                            </h4>
                            <p class="card-text">
                                {{ $comic->series }}
                            </p>
                            <p class="card-text">
                                {{ $comic->type }}
                            </p>
                            <p class="card-text">
                                <strong>
                                    {{ $comic->price }}
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <p>No Comics</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
