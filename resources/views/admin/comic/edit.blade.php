@extends('layouts.app')


@section('content')
    <div class="container">
        <h5 class="text-uppercase text-muted my-4">Edit a Comics</h5>

        <form action="{{ route('admin.comic.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Comic name here "
                    aria-describedby="nameHelper" value="{{ $comic->title }}">
                <small id="nameHelper" class="text-muted">Type the name of the Comic max 50 characters</small>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic image here "
                    aria-describedby="imageHelper" value="{{ $comic->thumb }}">
                <small id="imageHelper" class="text-muted">Type the image of the Comic max 50 characters</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control"
                    placeholder="Comic price here " aria-describedby="priceHelper" value="{{ $comic->price }}">
                <small id="priceHelper" class="text-muted">Type the price
                    of the Comic max 50 characters</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Comic price here "
                    aria-describedby="priceHelper" value="{{ $comic->series }}">
                <small id="priceHelper" class="text-muted">Type the series of the Comic max 50 characters</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="7">{{ $comic->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control"
                    placeholder="Comic sale_date here " aria-describedby="sale_dateHelper" value="{{ $comic->sale_date }}">
                <small id="sale_dateHelper" class="text-muted">Type
                    the sale_date of the Comic max 50 characters</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Comic type here "
                    aria-describedby="typeHelper" value="{{ $comic->type }}">
                <small id="typeHelper" class="text-muted">Type
                    the type of the Comic max 50 characters</small>
            </div>
            <button type="submit" class="btn btn-dark w-100 my-4">Edit a Comic</button>
        </form>
    </div>
@endsection
