@extends('layouts.app')


@section('content')
    <div class="container-fluid p-0">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center">
            <h1>Admin comics</h1>
            <a href="{{ route('admin.comic.create') }}" class="btn btn-dark d-block">
                <i class="fas fa-plus-circle fa-sm fa-fw"></i>
                New Comic
            </a>
        </div>

        <div class="table-responsive">
            <table
                class="table table-striped
        table-hover
        table-borderless
        table-secondary
        align-middle">
                <thead class="table-light">
                    <caption>Table Name</caption>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">
                    @forelse ($comics as $comic)
                        <tr class="table-dark">
                            <td scope="row">{{ $comic->id }}</td>
                            <td><img height="100" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.comic.show', $comic->id) }}"
                                    role="button">
                                    <i class="fas fa-eye fa-sm fa-fw"></i>
                                </a>
                                <a class="btn btn-secondary" href="{{ route('admin.comic.edit', $comic->id) }}"
                                    role="button">
                                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                                </a>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $comic->id }}">
                                    <i class="fas fa-trash fa-sm fa-fw"></i>
                                </button>
                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content text-black">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">Delete: {{ $comic->title }} </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                This is a destructive action
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary text-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('admin.comic.destroy', $comic->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" title="Delete">
                                                        <i class="fas fa-trash fa-sm fa-fw"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr scope="row">
                            <td>No records in the db yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
