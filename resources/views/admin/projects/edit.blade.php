@extends('layouts.app')

@section('import-cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <h1 class="container my-1">edit</h1>
    <div class="container mt-5">
        <a class="" href="{{ route('admin.projects.index') }}">
            <div class="my-3 btn btn-success">
                Back to list
            </div>
        </a>

        <div class="my-3 btn btn-danger" data-bs-toggle="modal" data-bs-target="#ciccio{{ $project->id }}">
            Delete item
        </div>

        <section>
            <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" />
                <label for="git_url" class="form-label">Url</label>
                <textarea class="form-control" id="git_url" name="git_url" rows="1">{{ $project->git_url }}</textarea>

                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5">{{ $project->description }}</textarea>

                <button type="submit" class="btn btn-primary my-3">Edit</button>
            </form>
    </div>
    </section>
@endsection

@section('modals')
    <div class="modal fade" id="ciccio{{ $project->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Delete {{ $project->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    confirm the deletion of<span class="text-danger fw-bolder">{{ $project->name }}</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
