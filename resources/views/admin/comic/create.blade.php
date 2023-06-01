@extends('layouts.app')


@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif


        <h5 class="text-uppercase text-muted my-4">Add a new Comics</h5>

        <form action="{{ route('admin.comic.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Comic name here " aria-describedby="nameHelper" required value="{{ old('title') }}">
                <small id="nameHelper" class="text-muted">Type the name of the Comic max 50 characters</small>
                @error('title')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" name="thumb" id="thumb"
                    class="form-control @error('thumb') is-invalid @enderror" placeholder="Comic image here "
                    aria-describedby="imageHelper" value="{{ old('thumb') }}">
                <small id="imageHelper" class="text-muted">Type the image of the Comic max 50 characters</small>
                @error('thumb')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" placeholder="Comic price here "
                    aria-describedby="priceHelper" value="{{ old('price') }}">
                <small id="priceHelper" class="text-muted">Type the price of the Comic max 50 characters</small>
                @error('price')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series"
                    class="form-control @error('series') is-invalid @enderror" placeholder="Comic price here "
                    aria-describedby="priceHelper" value="{{ old('series') }}">
                <small id="priceHelper" class="text-muted">Type the series of the Comic max 50 characters</small>
                @error('series')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="7">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="date" name="sale_date" id="sale_date"
                    class="form-control @error('sale_date') is-invalid @enderror" placeholder="Comic sale_date here "
                    aria-describedby="sale_dateHelper"
                    value="{{ old('sale_date') }}>
                <small id="sale_dateHelper" class="text-muted">Type
                the sale_date of the Comic max 50 characters</small>
                @error('sale_date')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                    placeholder="Comic type here " aria-describedby="typeHelper" value="{{ old('type') }}">
                <small id="typeHelper" class="text-muted">Type
                    the type of the Comic max 50 characters</small>
                @error('type')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark w-100 my-4">Save</button>
        </form>
    </div>
@endsection
