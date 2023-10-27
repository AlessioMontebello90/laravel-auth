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
                back to index
            </div>
        </a>
        {{-- <a class="" href="{{route('admin.projects.delete')}}"> --}}
        <div class="my-3 btn btn-danger">
            delete item
        </div>
        {{-- </a> --}}

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

                <button type="submit" class="btn btn-primary my-3">modifica</button>
            </form>
    </div>
    </section>
@endsection
