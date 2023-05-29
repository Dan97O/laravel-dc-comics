@extends('layouts.app')


@section('content')
    <div class="container">
        <h5 class="text-uppercase text-muted my-4">Add a new Comics</h5>

        <form action="{{ route('comic.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Comic name here "
                    aria-describedby="nameHelper" required>
                <small id="nameHelper" class="text-muted">Type the name of the Comic max 50 characters</small>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" id="image" class="form-control" placeholder="Comic image here "
                    aria-describedby="imageHelper">
                <small id="imageHelper" class="text-muted">Type the image of the Comic max 50 characters</small>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" id="price" class="form-control"
                    placeholder="Comic price here " aria-describedby="priceHelper">
                <small id="priceHelper" class="text-muted">Type the price of the Comic max 50 characters</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Series</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Comic price here "
                    aria-describedby="priceHelper">
                <small id="priceHelper" class="text-muted">Type the series of the Comic max 50 characters</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control"
                    placeholder="Comic description here " aria-describedby="descriptionHelper">
                <small id="descriptionHelper" class="text-muted">Type the description of the Comic max 50 characters</small>
            </div>
            <button type="submit" class="btn btn-dark w-100 my-4">Save</button>
        </form>
    </div>
@endsection
