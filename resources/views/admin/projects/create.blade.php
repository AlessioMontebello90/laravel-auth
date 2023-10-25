@extends('layouts.app')

@section('import-cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <h1 class="container my-1">Add new project</h1>
    <div class="container mt-5">
        <a class="" href="{{ route('admin.projects.index') }}">
            <div class="my-3 btn btn-success">
                back to portfolio list
            </div>
        </a>
        <section class="debug">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf

                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" />

                <label for="Url" class="form-label">Url</label>
                <textarea class="form-control" id="Url" name="Url" rows="1"></textarea>

                <label for="Description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5"></textarea>

                <button type="submit" class="btn btn-warning mt-5">Save</button>
            </form>
    </div>
    </section>
@endsection
