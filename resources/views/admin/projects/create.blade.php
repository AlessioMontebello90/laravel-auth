@extends('layouts.app')

@section('import-cdn')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <h1 class="container my-1">create</h1>
    <div class="container mt-5">
        <a class="" href="{{ route('admin.projects.index') }}">
            <div class="my-3 btn btn-success">
                back to portfolio list
            </div>
        </a>
        <table class="table">

            <tbody>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Url</th>
                <th scope="col">Description</th>
                <th scope="col" colspan="3">Action</th>
            </tbody>

        </table>
    </div>
@endsection
