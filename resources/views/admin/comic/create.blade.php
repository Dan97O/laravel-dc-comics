@extends('layouts.app')


@section('content')
    <div class="container">
        <h5 class="text-uppercase text-muted my-4">Add a new Comics</h5>

        <form action="{{ route('admin.comic.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Name</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Comic name here "
                    aria-describedby="nameHelper" required>
                <small id="nameHelper" class="text-muted">Type the name of the Comic max 50 characters</small>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Comic image here "
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
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Comic price here "
                    aria-describedby="priceHelper">
                <small id="priceHelper" class="text-muted">Type the series of the Comic max 50 characters</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="7"></textarea>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control"
                    placeholder="Comic sale_date here " aria-describedby="sale_dateHelper">
                <small id="sale_dateHelper" class="text-muted">Type
                    the sale_date of the Comic max 50 characters</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Comic type here "
                    aria-describedby="typeHelper">
                <small id="typeHelper" class="text-muted">Type
                    the type of the Comic max 50 characters</small>
            </div>
            <button type="submit" class="btn btn-dark w-100 my-4">Save</button>
        </form>
    </div>
@endsection
